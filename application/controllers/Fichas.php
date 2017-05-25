<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fichas extends CI_Controller {

    public function index() {
        $this->load->view('layout');
    }
    public function save(){
    	$this->load->view('testepdf');
		/*$html = $this->load->view('testepdf','',TRUE);
		$mpdf=new mPDF(); 
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
    }

}
