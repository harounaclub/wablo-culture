<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
    }

    public function index()
    {
        

         
        
        $data["main_content"]="dashboard_view"; 
        $this->load->view('index_view',$data); 
    }



    function generer_excel_file(){
   

      $info=array();
      
      //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Reporting Banque');
 
        // load database
        
 
        // get all users in array formate


        $users = $this->dashboard_model->liste_fbo_avec_compte();
        foreach ($users as $value) {

            $info[]=$value;
        	
        }

       


        $table[]= array('Debit Account Number', 'Beneficiary Name', 'Beneficiary Account','Payment Amount','Customer Reference','Payment Details Line 1','Payment Details Line 2');
        

      
        foreach ($info as $lines) {
           
          

        if(isset($lines['nom_distributeur'])){

             $table[]=array(
                            
                            '0100100135900', 
                            $lines['nom_distributeur'],
                            $lines['numero_compte'],
                            $lines['apayer']-1000,
                            $lines['code_distributeur'],
                            'VIREMENT BONUS DECEMBRE 16',
                            'LIBELLE2 PAIEMENT'
                          );

        }
            
           
           
           
             
        }

/*
          echo "<pre>";
        print_r($table);
        echo "</pre>";

*/


        

       
       
        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($table);
 
        $filename='reporting_banque.xls'; //save our workbook as this file name
 
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); //no cache
                    
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
 
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
 
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');

       

    }


    function generer_excel_file_credit(){
   

      $info=array();
      
      //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Credit fbo');
 
        // load database
        
 
        // get all users in array formate


        $users = $this->dashboard_model->liste_fbo_avec_credit_f();


         $info[]= array('No', 'code distributeur', 'nom distributeur','solde ','credit','status','compte bancaire');

        $compt=0;
        foreach ($users as $value) {

            if($compt==0){

            }else{

                $info[]=$value;

            }

            $compt=$compt+1;
            
        }

       

     
  
         



        

       
       
        // read data to active sheet

        
        $this->excel->getActiveSheet()->fromArray($info);
 
        $filename='credit_fbo.xls'; //save our workbook as this file name
 
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); //no cache
                    
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
 
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
 
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');

      

    }

    function regulariser_credit($code_transaction){


    	$list_fbo_by_code=$this->dashboard_model->get_fbo_infos($code_transaction);
    	$data["code_transaction"]=$code_transaction;

    	foreach ($list_fbo_by_code as $value) {

    		
    		$data["nom_prenom"]=$value->nom_prenom;
    		# code...
    	}


    	
    	$list_fbo_resume=$this->dashboard_model->get_resume_fbo_bycode($code_transaction);
    	foreach ($list_fbo_resume as $value) {

    		$data["solde"]=$value->apayer;
    		$data["credit"]=$value->credit;
    		
    	}


        $list_credit=$this->dashboard_model->get_credit_fbo_bycode($code_transaction);
        $credit=0;


        if(isset($list_credit)){
            foreach ($list_credit as $value) {

                
                $credit=$credit+$value->montant_credit;
                
            }
        }
        $data["credit"]=$credit;

    	$data["list_transaction_fbo_by_code"]=$this->dashboard_model->get_transactionfbo_infos($code_transaction);


    	 $data["main_content"]="regulariser_view";
        $this->load->view('index_view',$data);
    	

    	



    }

    function ajout_regularisateur(){


    	
    	
        $code_transaction=$this->input->post('code_transaction');

        $choix=$this->input->post('choix');
        $montant=$this->input->post('montant_credit');
        $appliquer=$this->input->post('appliquer');

        $type_operation="emprunt";

        if($choix == 2){

           $montant=-$montant;
           $type_operation="remboursement";

        }
        
        $motif=$this->input->post('motif');

        $infos_bonus=$this->dashboard_model->get_resume_fbo_bycode($code_transaction);
        foreach ($infos_bonus as $value) {

            
            $montant_fbo=$value->apayer;
            
        }



       
        $list_credit=$this->dashboard_model->get_credit_fbo_bycode($code_transaction);


       $credit=0;
        foreach ($list_credit as $value) {

            
            $credit=$credit+$value->montant_credit;
            
        }
        $data["credit"]=$credit;

        $montant_final_credit=$montant+$credit;
        $montant_final=$montant_fbo+$credit;
        $status_credit=0;

        $data_credit_fbo_u=array(


								'apayer' =>$montant_final,
								'credit' =>$montant_final_credit,
                                'status' =>$status_credit,	

								);

		$this->dashboard_model->update_resume_fbo($code_transaction,$data_credit_fbo_u);

		$data["montant_final"]=$montant;
		$data["motif"]=$motif;


    	
        redirect("dashboard");
    	

    	



    }

     function modifier_compte($code_transaction){


    	$list_fbo_by_code=$this->dashboard_model->get_fbo_infos($code_transaction);
    	$data["code_transaction"]=$code_transaction;

    	foreach ($list_fbo_by_code as $value) {

    		
    		$data["nom_prenom"]=$value->nom_prenom;
    		# code...
    	}


    	
    	$list_fbo_resume=$this->dashboard_model->get_resume_fbo_bycode($code_transaction);
    	foreach ($list_fbo_resume as $value) {

    		$data["solde"]=$value->apayer;
    		$data["credit"]=$value->credit;
    		
    	}


        $list_credit=$this->dashboard_model->get_credit_fbo_bycode($code_transaction);
        $credit=0;


        if(isset($list_credit)){
            foreach ($list_credit as $value) {

                
                $credit=$credit+$value->montant_credit;
                
            }
        }
        $data["credit"]=$credit;

    	$data["list_transaction_fbo_by_code"]=$this->dashboard_model->get_transactionfbo_infos($code_transaction);


    	 $data["main_content"]="ajouter_compte_info_view";
        $this->load->view('index_view',$data);
    	

    	



    }


    function ajout_compte(){


    	
    	
        $code_transaction=$this->input->post('code_transaction');
        $compte_fbo=$this->input->post('compte_fbo');
       


       
        $data_credit_fbo_u=array(
								
								'numero_compte' =>$compte_fbo,
                               

								);

		$this->dashboard_model->update_resume_fbo($code_transaction,$data_credit_fbo_u);
		$this->dashboard_model->update_infos_fbo($code_transaction,$data_credit_fbo_u);

		


    	
       redirect("dashboard");
    	

    	



    }

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 