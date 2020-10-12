<?php
class Employee_model extends CI_Model{

	function employee_list(){
		$employee=$this->db->get('employee');
		return $employee->result();
	}

	function save_employee(){
		$data = array(
				'name' 	=> $this->input->post('name'), 
				'email' 	=> $this->input->post('email'), 
				'phone' 	=> $this->input->post('phone'), 
				'address' => $this->input->post('address'), 
				'city' => $this->input->post('city'), 
				'state' => $this->input->post('state'), 
				'salary' => $this->input->post('salary'), 
				'country' => $this->input->post('country'), 
			);
		$result=$this->db->insert('employee',$data);
		return $result;
	}
	function getemployee_details($id){
		 $this->db->select("*");
    $this->db->from("employee");
    $this->db->where('id', $id);
    $q = $this->db->get();
    return $q->row();
	}
	function update_employee(){
		$name=$this->input->post('editname');
		$email=$this->input->post('editemail');
		$phone=$this->input->post('editphone');
		$address=$this->input->post('editaddress');
		$city=$this->input->post('editcity');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		$employee_id=$this->input->post('employee_id');

		$this->db->set('name', $name);
		$this->db->set('email', $email);
		$this->db->set('phone', $phone);
		$this->db->set('address', $address);
		$this->db->set('city', $city);
		$this->db->set('state', $state);
		$this->db->set('country', $country);
		$this->db->where('id', $employee_id);
		$result=$this->db->update('employee');
		return $result;
	}

	function delete_employee(){
		$employee_id=$this->input->post('employee_id');
		$this->db->where('id', $employee_id);
		$result=$this->db->delete('employee');
		return $result;
	}
	
}