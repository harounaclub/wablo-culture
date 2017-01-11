<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('upload','form_validation'));
        $this->load->helper(array('form','html','url'));

        $this->load->model('sms_model');
       
    }

    public function sms_simple()
    {
        
       // Next, make sure Requests can load internal classes
       $this->load->view('sms_simple');
        


    }

    public function sms_groupe()
    {
        
        
        $data["main_content"]="sms_groupe";
        $this->load->view('index_view',$data);
       
    }
    
    function chargement_sms_groupe(){

  

    	if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $targetPath = getcwd() . '/uploads/';
        $targetFile = $targetPath . $fileName ;
        move_uploaded_file($tempFile, $targetFile);
        // if you want to save in db,where here
        // with out model just for example
        // $this->load->database(); // load database
        // $this->db->insert('file_table',array('file_name' => $fileName));
        }  


    	$file = './uploads/'.$fileName;
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		//$data['header'] = $header;
		$data['values'] = $arr_data;
		$nbre_fbo_apayer=count($arr_data)+2;
        
        
        echo $nbre_fbo_apayer;

       /*
		echo "<pre>";
		print_r($arr_data);
		echo "</pre>";
        */
        
        
       
		
		
		for ($i=2; $i < $nbre_fbo_apayer ; $i++) { 


			$receiver_tel=$arr_data[$i]["A"];
			$msg=$arr_data[$i]["B"];


			

			$info_sms = array(

                                    'receiver_tel'  => $receiver_tel,                                             
                                    'msg'=> $msg,
                                                                      
                                    
                                   );
            
            print_r($info_sms);
            
            $message=urlencode($msg);
            
           $lien=base_url().'assets/http_request/?tel='.$receiver_tel.'&message='.$message;
            
         $homepage = file_get_contents($lien);
            echo $homepage;  
           $this->sms_model->ajout_sms($info_sms);
            
				
			# code...
		}

		


      
		
	}

    public function sms_personnalise()
    {
        
        $data["main_content"]="sms_personnalise";
        $this->load->view('index_view',$data);
        
        
       
    }
    function chargement_sms_personnalise(){

  

    	if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $targetPath = getcwd() . '/uploads/';
        $targetFile = $targetPath . $fileName ;
        move_uploaded_file($tempFile, $targetFile);
        // if you want to save in db,where here
        // with out model just for example
        // $this->load->database(); // load database
        // $this->db->insert('file_table',array('file_name' => $fileName));
        }  


    	$file = './uploads/'.$fileName;
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		//$data['header'] = $header;
		$data['values'] = $arr_data;
		$nbre_fbo_apayer=count($arr_data)+2;
        
        
        echo $nbre_fbo_apayer;

       /*
		echo "<pre>";
		print_r($arr_data);
		echo "</pre>";
        */
        
        
       
		
		
		for ($i=2; $i < $nbre_fbo_apayer ; $i++) { 


			$civilite=$arr_data[$i]["A"];
			$nom=$arr_data[$i]["B"];
            $prenom=$arr_data[$i]["C"];
            $tel=$arr_data[$i]["D"];
            $msg=$arr_data[$i]["E"];
     
            


			

			$info_sms = array(

                                    'receiver_tel'  => $tel,                                             
                                    'msg'=> $msg,
                                                                      
                                    
                                   );
            
            print_r($info_sms);
            
            $intro=$civilite.". ".$nom." ".$prenom." ";
            $intro_finale=substr($intro, 0,19);
            
            $message=urlencode($intro_finale.$msg);
            
           $lien=base_url().'assets/http_request/?tel='.$tel.'&message='.$message;
            
         $homepage = file_get_contents($lien);
            echo $homepage;  
           $this->sms_model->ajout_sms($info_sms);
            
				
			# code...
		}

		


      
		
	}


     public function historique()
    {
        
        
        $this->load->view('historique');


    }
    
    function envoi_sms_simple(){

        $this->form_validation->set_rules('receiver_tel', 'numero destinataire', 'trim|required|xss_clean');
        $this->form_validation->set_rules('msg', 'Message', 'trim|required|xss_clean');
        
        
       
          
        if($this->form_validation->run()) 
        {
               
           $receiver_tel=$this->input->post('receiver_tel');
           $msg=$this->input->post('msg');
           
           

           $info_sms = array(

                                    'receiver_tel'  => $receiver_tel,                                             
                                    'msg'=> $msg,
                                                                      
                                    
                                   );
            
            $message=urlencode($msg);
            
           $lien=base_url().'assets/http_request/?tel='.$receiver_tel.'&message='.$message;
            
           $homepage = file_get_contents($lien);
            echo $homepage;  
           $this->sms_model->ajout_sms($info_sms);
            
           $data["succes"]="ok";
           $this->load->view('sms_simple',$data);
           
        }
        else
        {
            
          $this->load->view('sms_simple');

        }
         


    }




    

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 