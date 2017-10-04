<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('layout');
    }
    public function logar(){
      $this->load->view('layout');
    }
    public function valida(){
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');
        $usuario = $this->db->select('id,usuario,senha')->from('usuarios')->where('senha',md5($senha))->get()->first_row('array');
        if(sizeof($usuario)>0){
            echo
            '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Usu&aacute;rio logado com sucesso !!!</strong>
                <input type="text" id="retorno" value="sucesso">
            </div>';
        }else{
            echo
            '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Usu&aacute;rio n&atilde;o encontrado !!!</strong>
                <input type="text" id="retorno" value="falha"></input>
            </div>';
        }
    }
    public function login(){
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');
        $usuario = $this->db->select('id,usuario,senha')->from('usuarios')->where('senha',md5($senha))->get()->first_row('array');
        if(sizeof($usuario) > 0){
            $session = array(
                'usuario'  => $usuario,
                'idusuario'  => $login['id'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session);
            redirect('home');
        }
    }
    public function cadastro(){
      $this->load->view('layout');
    }
    public function save(){
    
      $this->db->set('nome',$this->input->post('nome'));
      $this->db->set('usuario',$this->input->post('user'));
      $this->db->set('email',$this->input->post('email'));
      $this->db->set('senha',md5($this->input->post('senha')));
      $this->db->insert('usuarios');
      $id = $this->db->select('id')->from('usuarios')->where('usuario',$this->input->post('user'))->where('senha',md5($this->input->post('senha')))->get()->first_row('array');
      $session = array(
        'usuario'  => $this->input->post('user'),
        'idusuario'  => $id['id'],
        'logged_in' => TRUE
      );
      $this->session->set_userdata($session);
      redirect('home');
    }
    public function sair(){
      $array_items = array('usuario', 'idusuario','logged_in');
      $this->session->unset_userdata($array_items);
      redirect('home');
    }
}
