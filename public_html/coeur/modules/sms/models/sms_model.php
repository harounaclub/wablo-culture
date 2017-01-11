<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Sms_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected

  function add_sms($data){

     $this->db->insert('transaction', $data);
     return true; 
    
   }

   function ajout_sms($data){

    $this->db->insert('sms', $data); 
    return TRUE;

   }

    


    
   }