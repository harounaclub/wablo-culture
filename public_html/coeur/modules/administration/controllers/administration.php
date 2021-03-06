<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('administration_model');
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
     
     public function inscription_2()
    {
        
         
        $this->load->view('inscription_2');
    }

     public function ajout_unite()
    {
        
         
        $this->load->view('ajout_unite_view');
    }
    
     public function liste_unite()
    {
        
         
        $this->load->view('liste_des_unites');
    }

     public function info_entreprise()
    {
        
         
        $this->load->view('info_entreprise');
    }

     public function ajout_personnel()
    {
        
         
        $this->load->view('ajout_personnel_view');
    }

     public function liste_des_personnels()
    {
        
         
        $this->load->view('liste_des_personnels_view');
    }

     public function ajout_valeur()
    {
        
         
        $this->load->view('ajouter_valeur_view');
    }

    public function liste_des_valeurs()
    {
        
         
        $this->load->view('liste_des_valeurs_view');
    }

    public function liste_des_questionnaires()
    {
        
         
        $this->load->view('liste_des_questionnaires_view');
    }

    public function evaluation()
    {
        
         
        $this->load->view('evaluation_view');
    }

    public function questionnaires()
    {
        
         
        $this->load->view('questionnaires_view');
    }

     public function performance()
    {
        
         
        $this->load->view('performances_view');
    }
}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 