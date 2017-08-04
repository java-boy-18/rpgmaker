<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fichas extends CI_Controller {
// testando update
    public function index() {
        $this->load->view('layout');
    }
    public function save(){
    	$this->load->view('geraficha');
		/*$html = $this->load->view('testepdf','',TRUE);
		$mpdf=new mPDF();
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
    }

}
