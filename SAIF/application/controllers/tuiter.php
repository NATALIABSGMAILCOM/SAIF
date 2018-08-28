<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuiter extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Post_model');
    }
	public function index()
	{
            $this->load->view('nav');
            $this->load->view('conteudo');
            $this->load->view('rodape');
	}
        public function tuitar(){
            $this->load->view('nav');
            $this->load->view('tuitar');
            $this->load->view('rodape');
        }
        public function timeline(){
            $this->load->model('Post_model');
            $dados["posts"] = $this->Post_model->recuperar();
            $this->load->view('nav', $dados);
            $this->load->view('timeline');
            $this->load->view('rodape');
        }
        public function notificacoes(){
            $this->load->view('nav');
            $this->load->view('notificacoes');
            $this->load->view('rodape');
        }
        public function mensagens(){
            $this->load->view('nav');
            $this->load->view('mensagens');
            $this->load->view('rodape');
        }
        public function seguidores(){
            $this->load->view('nav');
            $this->load->view('seguidores');
            $this->load->view('rodape');
        }
        public function salvar(){
            $msg = $_POST["mensagem"];
            $this->Post_model->msg = $msg;
            $this->Post_model->inserir();
            redirect('tuiter/timeline');
        }
}
