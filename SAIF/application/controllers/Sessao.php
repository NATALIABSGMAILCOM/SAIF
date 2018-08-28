<?php


class Sessao extends CI_Controller{
       public function __construct() {
            parent::__construct();
        }
 
	public function index(){
            //Carrega o Model
        }
        
        public function Salvar(){
            $modalidade = $_POST["modalidade"];
           
            $this->load->model('Sessao_model');
            $this->Sessao_model->modalidade = $modalidade;
             
            $this->Sessao_model->inserir();
            
            redirect(base_url()."index.php/Principal/cadastrar_ficha");  
            
        }
        function id_cont() {
            $news_data = new news_model();
            $ids = $news_data->Sessao_model();
            print_r($ids);
}
        
      
}
