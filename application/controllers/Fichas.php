<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fichas extends CI_Controller {
// testando update
    public function index() {
        $this->load->view('layout');
    }
    public function save(){
      if(isset($_SESSION['logged_in'])){
        $this->db->set('idusuario',$_SESSION['idusuario']);
        $this->db->set('jogador',$this->input->post('jogador'));
        $this->db->set('personagem',$this->input->post('personagem'));
        $this->db->set('classe',$this->input->post('classe'));
        $this->db->set('raca',$this->input->post('raca'));
        $this->db->set('tendencia',$this->input->post('tendencia'));
        $this->db->set('divindade',$this->input->post('divindade'));
        $this->db->set('tamanho',$this->input->post('tamanho'));
        $this->db->set('idade',$this->input->post('idade'));
        $this->db->set('sexo',$this->input->post('sexo'));
        $this->db->set('altura',$this->input->post('altura'));
        $this->db->set('peso',$this->input->post('peso'));
        $this->db->set('olhos',$this->input->post('olhos'));
        $this->db->set('cabelos',$this->input->post('cabelos'));
        $this->db->set('pele',$this->input->post('pele'));
        $this->db->insert('fichas');
      }
    	$this->load->view('geraficha');
    }
    public function geraficha(){
      $this->load->view('geraficha');
    }
    public function minhasfichas(){
      $userid = $_SESSION['idusuario'];
      $rs['data'] = $this->db->select('*')->from('fichas')->where('idusuario',$userid)->get()->result_array();
      $this->load->view('layout',$rs);
    }
    public function excluir(){
      $id = $this->uri->segment(3);
      $this->db->where('id',$id)->delete('fichas');
      redirect('Fichas/minhasfichas');
    }
    public function testepdf(){
      $this->load->view('testepdf');
    }

}
