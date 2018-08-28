<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hospital
 *
 * @author Nathy
 */
class Usuario extends CI_Controller{
   
    public function __construct() {
            parent::__construct();
        }
 
	public function index(){
            //Carrega o Model
        }
        public function autenticar(){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
        
            $this->load->model("Usuario_model");
            $u = $this->Usuario_model->verificarLoginESenha($login, $senha);
        if ($u){
            $this->session->set_userdata("usuario", $u);
            redirect('Principal/inicio');
        }else{
            $this->session->set_flashdata("msg", "Dados incorretos");
            redirect('Principal/inicial');
        }
        }
         public function sair(){
            $this->session->unset_userdata("usuario");
             redirect("Principal/inicial");
        }
        public function inicio(){
            
            $this->load->view("Home");
        }
       
    
        public function Salvar() {
            $n = $_POST["nome"];
            $login =  $_POST["login"];
            $senha = $_POST["senha"];
            $cpf = $_POST["cpf"];
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->nome = $n;
            $this->Usuario_model->login = $login;
            $this->Usuario_model->senha = $senha;
            $this->Usuario_model->cpf = $cpf;
            
            $this->Usuario_model->inserir(); 
          
            redirect(base_url()."index.php/Principal/inicio");
        }
        
    
        
        public function Listar() {

            $this->load->model('Usuario_model');
            $dados['usuario'] = $this->Usuario_model->get_todos_usuarios();
            
            $this->load->view('nav');
            $this->load->view('perfil', $dados);
            
        }
        
        public function Excluir() {
            
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $this->Usuario_model->delete($id);
            redirect(base_url().'usuario/perfil');
        }
            
        public function editar(){
            
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $dados['usuario'] = $this->Usuario_model->recuperarUm($id);
            $this->load->view('nav');
            $this->load->view('usuario', $dados);
        }
        
        public function atualizar(){
            
            $this->load->model('Usuario_model');
            $this->Post_model->nome = $_POST["nome"];
            $this->Post_model->id = $_POST["id"];
            $this->Post_model->update();
            redirect('Principal/perfil');
        }
}