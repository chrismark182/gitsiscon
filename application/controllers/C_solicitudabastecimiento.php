<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_solicitudabastecimiento extends CI_Controller {

	var $data = array();

	public function __construct()
    {
        parent::__construct();
		$this->_init();
		if($this->session->userdata('logged_in')):
            $this->load->library('EsandexAccesos');  
			$this->data['session'] = $this->esandexaccesos->session();
            $this->data['accesos'] = $this->esandexaccesos->accesos();
			$this->load->helper('form');
            //$empresa = $this->M_crud->read('empresa', array('EMPRES_N_ID' => $this->session->userdata('empresa_id')));
            //$this->data['empresa']=$empresa[0];
		else:
			redirect(base_url(),'refresh');
		endif;
	}
	private function _init()
	{
		$this->output->set_template('siscon');
	}

	public function index()
	{
	     //Variables de pagina
		 $varuid=$this->data['session']->USUARI_N_ID;
		 
		 if($varuid==1){
			
			//SOLICITADO 
	     	$sql = "EXEC SOLIABAS_LIS '{$this->data['session']->USUARI_N_ID}',0"; //AGREGAR SOLABAS_ESTADO = 0
			
			//EN PROCESO
			$sql2= "EXEC SOLIABAS_LIS '{$this->data['session']->USUARI_N_ID}',1"; //AGREGAR SOLABAS_ESTADO = 1
			
			$this->data['results2'] = $this->M_crud->sql($sql2);
			
			
			//CULMINADO
			$sql3= "EXEC SOLIABAS_LIS '{$this->data['session']->USUARI_N_ID}',2"; //AGREGAR SOLABAS_ESTADO = 2
			
			$this->data['results3'] = $this->M_crud->sql($sql3);
			
			
			//print
			
			
			//$sql3= "SELECT PAGO FROM DETALLE_PRECIO_SOLICITUD WHERE SOLABAS_N_ID =''";
			
			
		} 
		elseif($varuid==5 or $varuid==6 )
		{
			 $sql = "EXEC SOLIABAS_LIS 1,0";
		}
		 
		 
		$this->data['results'] = $this->M_crud->sql($sql);
		
		
		
		//if(is_null($sql2)){
		//
		//}
		//Carga de vistas
		//$this->load->view('usuario/V_index', $this->data);
		
      $this->load->view('solicitudabastecimiento/V_index', $this->data);
        
	}
	
	
	public function nuevo()
	{
		//$this->data['empresas'] = $this->M_crud->sql("EXEC EMPRESA_LIS 0");

		//$sql =  "EXEC CATEGORIA_LIS 0";
		//$this->data['categorias'] = $this->M_crud->sql($sql);
		//Carga de vistas
		
		$sql= 'select top 1 SOLABAS_NUMERO from SOLICITUD_ABASTECIMIENTO order by SOLABAS_N_ID desc';
		
		$this->data['results'] = $this->M_crud->sql($sql);
		
		
		$this->load->view('solicitudabastecimiento/V_nuevo', $this->data);
	}
	
	
	public function crear()
	{	
	
		if($this->input->post('fecha') != '') //Validar campo de llenado
		{
			
			$this->M_crud->sql("EXEC SOLIABAS_INS '{$this->input->post('fecha')}', 
												  '{$this->input->post('numero')}', 
												  '{$this->input->post('empresaid')}',
												  '{$this->input->post('tipoid')}',
												  '{$this->input->post('datogg')}',
												  '{$this->input->post('datoadmi')}',
												  '{$this->input->post('datosis')}',
												  '{$this->input->post('datomon')}',
												  '{$this->input->post('datooper')}',
												  '{$this->input->post('datogal')}',
												  '{$this->input->post('datoopera')}',
												  '{$this->input->post('datosegu')}',
												  '{$this->input->post('datorrhh')}',
												  '{$this->input->post('datootr')}',
												  '{$this->input->post('otrosin')}',
												  '{$this->session->userdata('id')}'");
							


			//File
			 $config['upload_path']          = './uploads/';
             $config['allowed_types']        = 'gif|jpg|png|pdf';
             $config['max_size']             = 2000; // Can be set to particular file size , here it is 2 MB(2048 Kb)
             $config['max_width']            = 1024;
             $config['max_height']           = 1780;
			 $config['encrypt_name'] = TRUE;
			
			$this->load->library('upload', $config);
			
			$i=1;

                if ( ! $this->upload->do_upload('userfile1_'.$i))
                {
                      $error = array('error' => $this->upload->display_errors());

                      //$this->load->view('upload_form', $error);
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
					   
					   $file1=$this->upload->data('file_name');

                      //$this->load->view('upload_success', $data);
                }
				
				
				
				 
				if ( ! $this->upload->do_upload('userfile2_'.$i))
                {
                      $error = array('error' => $this->upload->display_errors());

                      //$this->load->view('upload_form', $error);
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
					   
					   $file2=$this->upload->data('file_name');

                      //$this->load->view('upload_success', $data);
                }
								
				 
				 if ( ! $this->upload->do_upload('userfile3_'.$i))
                {
                      $error = array('error' => $this->upload->display_errors());

                      //$this->load->view('upload_form', $error);
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
					   
					   $file3=$this->upload->data('file_name');

                      //$this->load->view('upload_success', $data);
                }
				
				
				
				
				
				
				
						
			//Fin File


							
			//RETORNA	
			/*
			$data =	$this->input->post('vararray');
	
			$a = json_decode($data, true);
			
			$total1=count($a);
			
			foreach($a as $v1){
			
			$vardata="";
				
			foreach($v1 as $v2){
			$vardata= $vardata."," . "'".$v2."'";
			}
				
			$vardata=trim($vardata,',');
			*/
			
				
			//EJECUCION
			//$this->M_crud->sql("EXEC DETSOLIABAS_INS $vardata");
				
			//}
			
			//FIN RETORNA
			
			$this->M_crud->sql("EXEC DETSOLIABAS_INS '{$this->input->post('cant_1')}', 
												  '{$this->input->post('descrip_1')}', 
												  '{$file1}',
												  '{$file2}',
												  '{$file3}'");
												  
												  
		/*Aqui va el CORREO*/
		$this->load->library('email');

		$this->email->from('cmcuadros@hotmail.com', 'christian');
		$this->email->to('chrismark_14@hotmail.com');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');

		$this->email->subject('Solicitud de Obras/Abastecimiento');
		$this->email->message('Se genero una solicitud de Obras/Abastecimiento, verificar en el panel .');

		$this->email->send();								  
		/////FIN CORREO//										  
												  
												  
												  
									  
			$this->session->set_flashdata('message', 'Solicitud de Abastecimiento creado correctamente');  
			redirect('solicitudabastecimiento', 'refresh');
		
		}
		else{
			//$this->session->set_flashdata('message', 'No se puede registrar un nombre de usuario vacio');    
			redirect('solicitudabastecimiento/nuevo', 'refresh'); 
		}
	
		//$this->load->view('solicitudabastecimiento/V_index', $this->data);
	}
	
	
	
	/*
	public function cargarArray(){
   $data=array(
    'nombre'=>'Nombre: Ludwing,',
    'apellido'=>'Apellido: Salinas'
   );
   return $data;
  }
	*/
	
	public function validate(){
		//echo "prueba";
		
		
		
		 $sql = "select SOLABAS_DATE,SOLABAS_NUMERO,SOLABAS_EMPRESA,SOLABAS_DEPARTGG,SOLABAS_DEPARTADMI,SOLABAS_DEPARTSISTE,SOLABAS_DEPARTMONI,SOLABAS_DEPARTOPER,SOLABAS_DEPARTGALMA,SOLABAS_DEPARTOPERA,SOLABAS_DEPARTSEGU,SOLABAS_DEPARTRRHH,SOLABAS_DEPARTOTROS,SOLABAS_OTROSOBS,SOLABAS_TIPO from SOLICITUD_ABASTECIMIENTO where
		SOLABAS_N_ID = '{$this->input->post('vs_var1')}'";
		
		$this->datasoliabas['result'] = $this->M_crud->sql($sql);
		
		//print_r($this->datasoliabas['result']);
		//$var = array('email'=>"1",'password'=>'2');
		
		
		if ($this->datasoliabas['result']!="") {
		//$this->datasoliabas['results']
         echo json_encode($this->datasoliabas);
        }else{
          // echo "2_|_";
        }
		
		//echo json_encode($this->datasoliabas);	
	
	}
	
	
	public function autorizar(){
		
	//$this->M_crud->sql("update SOLICITUD_ABASTECIMIENTO set SOLABAS_ESTADO = '0'");
	
	
	$this->db->simple_query("UPDATE SOLICITUD_ABASTECIMIENTO SET SOLABAS_ESTADO = '1' , SOLABAS_OPC1 = '{$this->input->post('rfileid')}' where SOLABAS_N_ID ='{$this->input->post('idsolabas')}'");
	//return $query->result();
	
	
	 //$this->db->_error_number();
	 
	//$this->db->error();
	
    //$error = $this->db->error();
	
		redirect('solicitudabastecimiento', 'refresh');
	}
	
	
	
	
	
	
	 public function cargaDatos(){
        // estos son los datos que se cargarán con AJAX
        // De nuestro modelo, invoco el método cargarArray
        //$data["datos"]= $this->modelo->cargarArray();
        // cargo la vista donde se mostrarán los datos: paginaArray2
        
		//$this->M_crud->sql("select SOLABAS_DATE,SOLABAS_NUMERO,SOLABAS_EMPRESA,SOLABAS_DEPARTGG,SOLABAS_DEPARTADMI,SOLABAS_DEPARTSISTE,SOLABAS_DEPARTMONI,SOLABAS_DEPARTOPER,SOLABAS_DEPARTGALMA,SOLABAS_DEPARTOPERA,SOLABAS_DEPARTSEGU,SOLABAS_DEPARTRRHH,SOLABAS_DEPARTOTROS,SOLABAS_OTROSOBS,SOLABAS_TIPO from SOLICITUD_ABASTECIMIENTO");
		
		
		
		//$data=array('nombre'=>'Nombre: Ludwing,','apellido'=>'Apellido: Salinas');
		
		
		//$this->load->view("paginaArray2",$data);
    }
	
	
		
	
	function sendMail(){
		$this->load->library('email');
		//$configuraciones['mailtype']='html';
		//$this->email->initialize($configuraciones);
		$this->email->from('correo','persona');
		$this->email->to('correoenvio');
		//$this->email->cc('');
		
		$this->email->subject('Texto Asunto');
		//$this->email->message('Texto contenido');
		$this->email->message('<h2>Correo imagen</h2>
		<hr><br>
		TITULO
		<br>
		<a href="google.com" ><img src="" height="150" width="150"></a><h3>Click en la imagen </h3>');
		
		
		if($this->email->send()){
			//echo "Correo enviado";
			//$this->load->view('');
		}
		else{
			//echo "Correo no enviado";
			echo $this->email->print_debbuger();
		}
		
		
		
		
		
	}
	
	
  
}
