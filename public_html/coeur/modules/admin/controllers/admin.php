<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }


    public function index(){
        
         
        $this->load->view('main_view');
    }

    public function login(){
        
         
        $this->load->view('login_view');
    }

     public function attente_de_validation(){
        
         
        $this->load->view('attente_de_validation_view');
    }

    public function entreprise_valide(){
        
         
        $this->load->view('entreprise_valider_view');
    }
     
     public function souscription(){
        
         
        $this->load->view('souscription');
    }

    public function button(){
        
         
        $this->load->view('buttons');
    }

     public function ajout_questionnaire(){
        
         
        $this->load->view('ajout_questionnaire_view');
    }

    
    
     public function ajouter_valeur(){        
        
        $this->load->view('ajouter_valeur_view');
        
         
    }
    
    
    function insertion_valeur(){
        
        $this->form_validation->set_rules('mytext[]','liste ds valeurs','trim|required|xss_clean');
        if($this->form_validation->run()){
            
            $liste_valeurs[] = $this->input->post('mytext[]');
            $nbre = count($liste_valeurs);
            
            echo $nbre;
            exit();
            
            
        }else $this->load->view('ajouter_valeur_view');
        
    }


     public function liste_des_questionnaires(){
        
         
        $this->load->view('liste_des_questionnaires');
    }

    public function liste_des_valeurs(){
        
         
        $this->load->view('liste_valeur_view');
    }

    public function attente_de_validation_souscription(){
        
         
        $this->load->view('attente_de_validation_souscription');
    }

    public function liste_des_souscription_valide(){
        
         
        $this->load->view('liste_des_souscriptions_validee');
    }
}


/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 