<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

        public function _construct(){
            parent::__construct();
            $this->load->model('Usuario_model');
            
            if (!$this->session->userdata("usuario")){
                redirect("usuario/login");
            }
        
        }
	public function index(){
            $this->load->view("Inicial");
        }
        public function inicial(){
            $this->load->view("Inicial");
        }

        public function inicio(){
            $this->load->view("Home");
        }
        
        public function add_sessao(){
            $this->load->view("Adicionar_sessao");  
        }
        
        public function cadastrar_ficha(){
            $this->load->view("Cadastrar_fichas");
        }
        
        public function tela_atendente(){
            $this->load->view("Tela_do_atendente");
        }
        
        public function meus_dados(){
            $this->load->view("Meus_dados");
        }
        
        public function cadastro_atendente(){
            $this->load->view("Cadastro_do_atendente");
        }
        
        public function Painel(){
            $this->load->view("Painel");
        }
        
        public function informar_guiche(){
            $this->load->view("Informar_guiche");
        }
        
        public function Visualizar_atendentes(){
            $this->load->view("Visualizar_atendentes");
        }
        
        public function Visualizar_sessoes_abertas(){
            $this->load->view("Visualizar_sessoes_abertas");
        }

        public function Visualizar_sessoes_encerradas(){
            $this->load->view("Visualizar_sessoes_encerradas");
        }
        
        public function Remover_usuario(){
            $this->load->view("Remover_usuário");
        }

        


        /*
         * $this->load->view('conteudo');
           $this->load->view('rodape');
            
           $dados['titulo'] = "Página principal";
           $dados['conteudo'] = "Outro olá mundo!";
           $this->load->view('pagina_principal', $dados);
           
	}
        
	public function sobre()
	{
            $dados['titulo'] = $this->uri->segment(1);
            $dados['conteudo'] = $this->uri->segment(2);
            $this->load->view('pagina_principal', $dados);
	}
        
       public function listaralunos(){
           $alunos[1] = "Maria";
           $alunos[2] = "Marta";
           $alunos[3] = "Melina";
            
           $parametro = $this->uri->segment(2);
           $dados['nome'] = $alunos[$parametro];
           $this->load->view('alunos', $dados);
        }
        
        public function detalhes($id){
            $alunos[1]["nome"] = "Ana";
            $alunos[1]["foto"] = "img01.jpg";
            
            $alunos[2]["nome"] = "Alice";
            $alunos[2]["foto"] = "img02.jpg";
            
            $alunos[3]["nome"] = "Antônia";
            $alunos[3]["foto"] = "img03.jpg";
            
            $dados['nome'] = $alunos[$id]['nome'];
            $dados['foto'] = $alunos[$id]['foto'];
            
            $this->load->view('detalhes', $dados);
        }
        
        public function somar($n1, $n2){
            $dados['resultado'] = $n1 + $n2;
            $this->load->view('somar', $dados);
        }
         */ 
            
           
       
}
