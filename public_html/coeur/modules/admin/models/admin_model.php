<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected
   
   
    
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


    
   }