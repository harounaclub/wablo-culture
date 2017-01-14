<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Souscription extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('souscription_model');
    }

    public function index(){        
        $donnees['liste_package'] = $this->souscription_model->liste_package();
        $donnees['mode_paiement'] = array(''=>"Selection...",'1'=>"Paiement mobile",'2'=>"Carte bancaire");
//        var_dump($donnees['liste_package']);
        $this->load->view('souscription_view',$donnees); 
        
    }
    
    
    // Cette fonction permet d'ajouter une souscription
    function ajout_souscription(){
        
        $donnees['liste_package'] = $this->souscription_model->liste_package();
        
        $this->form_validation->set_rules('societe','raison sociale de la société','trim|required|xss_clean');
//        $this->form_validation->set_rules('nom','nom du souscripteur','trim|required|xss_clean');
//        $this->form_validation->set_rules('prenom','prenom du souscripteur','trim|required|xss_clean');
//        $this->form_validation->set_rules('email','email du souscripteur','trim|required|xss_clean');
//        $this->form_validation->set_rules('phone_bureau','telephone du bureau','trim|required|xss_clean');
//        $this->form_validation->set_rules('phone_mobile','mobile phone du souscripteur','trim|required|xss_clean');
        
        if($this->form_validation->run()){
             echo"je suis encore .....";
            //Liste des variables postées
            $societe = $this->input->post('societe');
            $nom_souscripteur = $this->input->post('nom_souscripteur');
            $prenom_souscripteur = $this->input->post('prenom_souscripteur');
            $email = $this->input->post('email');
            $phone_bureau=$this->input->post('phone_bureau');
            $phone_mobile=$this->input->post('phone_mobile');
            $id_package=$this->input->post('id_package');
            $mode_paiement=$this->input->post('mode_paiement');
            
            $data_array = array(
            
                'nom_societe'=>$societe,
                'nom_souscripteur'=>$nom_souscripteur,
                'prenom_souscripteur'=>$prenom_souscripteur,
                'email'=>$email,                
                'phone_bureau'=>$phone_bureau,
                'phone_mobile'=>$phone_mobile,
                'id_mode_paiement'=>$mode_paiement,
                'id_package'=>$id_package,
                
            );
            
            if($this->souscription_model->insert_souscription($data_array)){
                
                $reponse = '1';
                $return = array('reponse' => $reponse);
                echo json_encode($return);
                
            }else{
                
                $reponse = '0';
                $return = array('reponse' => $reponse);
                echo json_encode($return);
                
            }
            
        } else $this->load->view('souscription_view',$donnees);
        
    }
    
    
    function edit_souscription($id_souscription){
        
        $donnees['liste_package'] = $this->souscription_model->liste_package();
        
		$query = $this->souscription_model->get_souscription($id_souscription);
		foreach ($query->result() as $row) {
			$donnees['nom_societe'] = $row->nom_societe;
			$donnees['nom_souscripteur'] = $row->nom_souscripteur;	
			$donnees['prenom_souscripteur'] = $row->prenom_souscripteur;
			$donnees['email'] = $row->email;
			$donnees['phone_mobile'] = $row->phone_mobile;
			$donnees['phone_bureau'] = $row->phone_bureau;			
			//$parent_directions = $row->parent_directions;				
		}
		
		$data['code_directions']=array ('name'=>'code_directions', 'id'=>'code_directions', 'value'=>set_value('code_directions',$code_directions));
        
        
    }
    
    
    function supprimer_souscription($id_souscription){
        
        
    }
    

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 