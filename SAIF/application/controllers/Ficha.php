<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ficha
 *
 * @author Nathy
 */
class Ficha extends CI_Controller{
     public function __construct() {
            parent::__construct();
        } 
        
     public function index(){
            //Carrega o Model
        }
        
        public function Salvar(){
            $f = $_POST["ficha"];
           
            $this->load->model('Ficha_model');
            $this->Ficha_model->f = $f;
             
            $this->Ficha_model->inserir();
            
            redirect(base_url()."index.php/Principal/tela_atendente");
            
            
        }
}
