<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Dashboard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected
   
   function liste_fbo_sans_compte_limit_10(){


      $numero_compte=null;

       $this->db->where('numero_compte',$numero_compte);
       $this->db->limit('10');
       $q = $this->db->get('fbo');

       $compt=0;
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }



   function liste_fbo_avec_compte(){

    
     $query = $this->db->query("SELECT * FROM resume_fbo WHERE numero_compte <> 0");
     
     $data=array('');
          foreach ($query->result_array() as $row)
          {
             $data[]=$row;
          }

          return $data;

   }


   function liste_fbo_avec_credit_f(){

    
     $query = $this->db->query("SELECT * FROM resume_fbo WHERE status <> 0");
     
     $data=array('');
          foreach ($query->result_array() as $row)
          {
             $data[]=$row;
          }

          return $data;

   }
   

  

   function get_resume_fbo_bycode($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('resume_fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }

   function get_fbo_infos($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


   function get_fbo_infos_name($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $name=$lign->nom_prenom;
           }
           
           return $name;
       }

   }


   function update_infos_fbo($code_distributeur,$data){

   $this->db->where('code_distributeur',$code_distributeur);
   $this->db->update('fbo', $data);
   return TRUE;

   }



   function update_resume_fbo($code_distributeur,$data){

   $this->db->where('code_distributeur',$code_distributeur);
   $this->db->update('resume_fbo', $data);
   return TRUE;

   }


   function get_transactionfbo_infos($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('transaction');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }

    function get_credit_fbo_bycode($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('credit');


       $data=array();
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }



   function get_fbo_sans_compte(){


      $numero_compte=0;

       $this->db->where('numero_compte',$numero_compte);
       $q = $this->db->get('resume_fbo');

       $compt=0;
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $compt=$compt+1;
           }
           
           return $compt;
       }

   }



   function get_fbo_avec_credit(){


      $status=1;

       $this->db->where('credit >', '0');
       $this->db->where('status',$status);
       $q = $this->db->get('resume_fbo');

       $compt=0;
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $compt=$compt+1;
           }
           
           return $compt;
       }

   }
   




   function liste_fbo_avec_credit(){


      $status=1;

       $this->db->where('credit >', '0');
       $this->db->where('status',$status);
       $q = $this->db->get('resume_fbo');

       $data=array();
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


  

   function info_fichier_g(){


      
       $q = $this->db->get('generation_fichier');

       $data=array();
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


    function add_credit_fbo($data){

     $this->db->insert('credit', $data);
     return true; 
    
   }




    
   }