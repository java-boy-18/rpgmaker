<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('layout');
    }
    public function login(){
      $usuario = $this->input->post('usuario');
      $senha = md5($this->input->post('senha'));
      $login = $this->db->select('usuario,senha,id')->from('usuarios')->where('usuario',$usuario)->where('senha',$senha)->get()->first_row('array');
      if(sizeof($login) > 0){
        $session = array(
          'usuario'  => $usuario,
          'idusuario'  => $login['id'],
          'logged_in' => TRUE
        );
        $this->session->set_userdata($session);
        redirect('home');
      }else{
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
      $id = $this->db->select('id')->from('usuarios')->where('usuario',$this->input->post('user'))->where('senha',$senha)->get()->first_row('array');
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
