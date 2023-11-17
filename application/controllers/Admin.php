<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index (){
        $this->login();
    }

    public function login(){
        $this->nao_tem_sessao();
        $data['title'] = "Entrar no Sistema";
        $data['page_name'] = 'login';
        $this->load->view('admin', $data);
	}
    public function recuperar_acesso(){
        $this->nao_tem_sessao();
        $data['title'] = "Recuperar senha";
        $data['page_name'] = 'recuperar_acesso';
        $this->load->view('admin', $data);
    }
    public function cadastrar(){
        $this->nao_tem_sessao();
        $data['title'] = "Cadastrar";
        $data['page_name'] = 'cadastrar';
        $this->load->view('admin', $data);
    }


    public function sair (){
        $this->session->sess_destroy();
        redirect(base_url('login'), 'refresh');
    }

    public function logar_sistema(){

    }


    public function tem_sessao (){
        if (!$this->session->userdata('logado')){
            redirect(base_url('sair'), 'refresh');
        }
    }
    public function nao_tem_sessao(){
        if ($this->session->userdata('logado')){
            redirect(base_url('dashboard'), 'refresh');
        }
    }

}
