<?php
require_once APPPATH.'libraries/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
class Employee extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
	}
	function index(){
		$this->load->view('product_view');
	}

	function employees_data(){
		$data=$this->employee_model->employee_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->employee_model->save_employee();
		echo json_encode($data);
	}

	function update(){
		$data=$this->employee_model->update_employee();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->employee_model->delete_employee();
		echo json_encode($data);
	}
	function pdf($id){
		$data['employee']=$this->employee_model->getemployee_details($id);
		
		$html_content = $this->load->view('pdf_view',$data,true);
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html_content);
		$dompdf->setPaper('A4', 'PORTRAIT');
		$dompdf->render();
$filename="test.pdf";

$dompdf->stream($filename,array("Attachment"=>0));
	}
}