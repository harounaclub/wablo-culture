<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected
   
   
    //Methodes traitant les valeurs proposées par w@blo
    function insert_valeur($data){			
        
        if($this->db->insert('liste_valeur',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_valeur($id,$data){
        $this->db->where('id_liste_valeur', $id);
        if ($this->db->update('liste_valeur', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_valeur($id_liste_valeur){
        $this->db->where('id_liste_valeur',$id_liste_valeur);
        $this->db->delete('liste_valeur');
    } 
    
    
    function liste_valeur(){
        
        $data = array();
        
        $this->db->select('*');
        $this->db->from('liste_valeur');
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data[] = $lign;
            }
          
          return $data;
        }
        
    } 
    
    
    function avoir_valeur($id_valeur){
        
        $data = "";
        
        $this->db->select('*');
        $this->db->from('liste_valeur');
        $this->db->where('id_liste_valeur',$id_valeur);
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data = $lign->libelle_liste_valeur;
            }
          
          return $data;
        }
        
    }
    
    
    function valeur_existe($valeur_cherchee){
        
        $this->db->select('libelle_liste_valeur');
        $this->db->from('liste_valeur');
        $this->db->where('libelle_liste_valeur',$valeur_cherchee);
        $query = $this->db->get();  
        
        $rowcount = $query->num_rows();
        
        if($rowcount >0){
            return true;
        }else return false;      
        
        
    }
    
    
    
    //Methodes traitant les questionnaires
    function insert_questionnaire($data){			
        
        if($this->db->insert('questionnaire',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_questionnaire($id,$data){
        $this->db->where('id_questionnaire', $id);
        if ($this->db->update('questionnaire', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_questionnaire($id_questionnaire){
        $this->db->where('id_questionnaire',$id_questionnaire);
        $this->db->delete('questionnaire');
    } 
    
    
    function liste_questionnaire(){
        
        $data = array();
        
        $this->db->select('*');
        $this->db->from('questionnaire');
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data[] = $lign;
            }
          
          return $data;
        }
        
    } 
    
    
    function question_existe($id_valeur,$question){
        
        $this->db->select('*');
        $this->db->from('questionnaire');
        $this->db->where('id_valeur',$id_valeur);
        $this->db->where('libelle_questionnaire',$question);
        $query = $this->db->get();  
        
        $rowcount = $query->num_rows();
        
        if($rowcount >0){
            return true;
        }else return false;      
        
        
    }


    
   }