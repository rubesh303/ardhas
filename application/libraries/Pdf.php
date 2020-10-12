<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 


use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf 
{
 public function __construct()
 {
	 require_once 'dompdf/autoload.inc.php';
	 
	 
//	 $options = new Options();
//$options->set('defaultFont', 'Bamini');
	 
   // parent::__construct();
   $pdf=new DOMPDF();
   $CI= & get_instance();
   $CI->dompdf=$pdf;
 } 
}

?>