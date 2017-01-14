<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }


    public function index()
    {
        
         
        $this->load->view('main_view');
    }

    public function login()
    {
        
         
        $this->load->view('login_view');
    }

     public function attente_de_validation()
    {
        
         
        $this->load->view('attente_de_validation_view');
    }

    public function entreprise_valide()
    {
        
         
        $this->load->view('entreprise_valider_view');
    }
     
     public function inscription_2()
    {
        
         
        $this->load->view('inscription_2');
    }

    public function button()
    {
        
         
        $this->load->view('buttons');
    }

     public function ajout_questionnaire()
    {
        
         
        $this->load->view('ajout_questionnaire_view');
    }

     public function ajouter_valeur()
    {
        
         
        $this->load->view('ajouter_valeur_view');
    }

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 