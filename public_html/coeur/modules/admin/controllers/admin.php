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
        
        $donnees['liste_des_valeurs'] = $this->liste_des_valeurs();
        $donnees['titre'] = "Ajouter une société";
        $this->load->view('souscription',$donnees);
        
    }

    public function button(){
        
         
        $this->load->view('buttons');
    }
    

     public function ajout_questionnaire(){
        
        $donnees['liste_des_valeurs'] = $this->liste_des_valeurs();
        $donnees['titre'] = "Ajouter des éléments dans le questionnaire";
        
        
        $this->form_validation->set_rules('id_valeur','la valeur sélectrionnée','trim|required|xss_clean');
        $this->form_validation->set_rules('question1','la première question','trim|required|xss_clean');
         
         if($this->form_validation->run()){
            
            $nbre_question = $this->input->post('nb_question');
            $id_valeur = $this->input->post('id_valeur');
            $designation_valeur = $this->avoir_une_valeur($id_valeur);
            
            for($i=1; $i <= $nbre_question; $i++){
                
                $libelle_questionnaire = $this->input->post('question'.$i);
                
                $data_question = array(
                    'id_valeur'=>$id_valeur,
                    'libelle_questionnaire'=>$libelle_questionnaire,
                    'nom_valeur'=>$designation_valeur,
                );
                
                if(!$this->admin_model->question_existe($id_valeur,$libelle_questionnaire)){
                    
                    $this->admin_model->insert_questionnaire($data_question);
                    
                }
                
            }
            
            
        }else $this->load->view('ajout_questionnaire_view',$donnees);
         
    }
    
    
    
    
    private function avoir_une_valeur($id_valeur){
        
        $la_valeur = $this->admin_model->avoir_valeur($id_valeur);
        
        return $la_valeur;
        
    }
    
    
     private function liste_des_valeurs(){
        
       $liste_des_valeurs = $this->admin_model->liste_valeur();
         $option_valeur = array();
         
         if($liste_des_valeurs){
             
             $option_valeur[0] = "Choisir une valeur...";
             foreach($liste_des_valeurs as $valeur){
                 
                 $option_valeur[$valeur->id_liste_valeur] = $valeur->libelle_liste_valeur;
             }
             
             $liste_valeurs = $option_valeur;
         }
        
        return $liste_valeurs;
         
    }

    
    
     public function ajouter_valeur(){        
        
        $donnees['titre'] = "proposition de valeurs d'entreprise  par w@blo";
        $this->form_validation->set_rules('valeur1','liste des valeurs','trim|required|xss_clean');
        if($this->form_validation->run()){
            
            $nbre_valeur = $this->input->post('nb_valeur');
            
            for($i=1; $i <= $nbre_valeur; $i++){
                
                $valeur = $this->input->post('valeur'.$i);
                $sens = $this->input->post('sens'.$i);
                
                $data_valeur = array(
                    'libelle_liste_valeur'=>$valeur,
                    'signification_valeur'=>$sens,
                );
                
                if(!$this->admin_model->valeur_existe($valeur)){
                    
                    $this->admin_model->insert_valeur($data_valeur);
                    
                }
                
            }
            
            
        }else $this->load->view('ajouter_valeur_view',$donnees);
        
         
    }
    
    
    


     public function liste_des_questionnaires(){
        
         
        $this->load->view('liste_des_questionnaires');
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