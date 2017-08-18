<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('layout');
    }
    public function login(){
      $usuario = $this->input->post('usuario');
      $senha = md5($this->input->post('senha'));
      $login = $this->db->select('usuario,senha')->from('usuarios')->where('usuario',$usuario)->where('senha',$senha)->get()->first_row('array');
      if(sizeof($login) > 0){
        $session = array(
          'usuario'  => $usuario,
          'logged_in' => TRUE
        );
        $this->session->set_userdata($session);
        redirect('home');
      }else{
        echo 'aqui2';
      }
    }
    public function cadastro(){

    }
}
