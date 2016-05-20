<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ElegidoController extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('elegido_Model');
}
	public function index()
    {
	 $data['lis']=$this->elegido_Model->getTodos();

	  $this->load->view('digivistas/digiheader.php');	
	  $this->load->view('digivistas/digiindex',$data);
      $this->load->view('digivistas/digifooter.php');	
    }

 public function crear()
{
	
	$nombre=$this->input->post('nombre');
	$ape=$this->input->post('apellido');
	$edad=$this->input->post('edad');
	$digi=$this->input->post('digimon');
	$this->form_validation->set_rules('nombre','nombre','required');
	$this->form_validation->set_rules('apellido','apellido','required');
	$this->form_validation->set_rules('edad','edad','required|numeric');
	$this->form_validation->set_rules('digimon','digimon','required');
    $this->form_validation->set_message('required','El campo %s es Obligatorio');
    $this->form_validation->set_message('numeric','El campo %s debe ser numerico');
	
	if ($this->form_validation->run() == FALSE)
	{
		
	}else{
		$dato=array(
      'nombre'=>$nombre,
      'apellido'=>$ape,
      'edad'=>$edad,
      'digimon'=>$digi

		);
       if($this->elegido_Model->agregar($dato))
       {

       	$this->session->set_flashdata('msa', 'Niño Elegido registrado');
       	
       }
	}
	$this->index();
}


public function editar(){
	$id=$this->uri->segment(3);
	if($this->elegido_Model->obtenerporid($id))
	{
	$data['act']=$this->elegido_Model->obtenerporid($id);
	$this->load->view('digivistas/digiheader.php');	
	$this->load->view('digivistas/digicambio',$data);
    $this->load->view('digivistas/digifooter.php');	
	}
}

public function actualizar()
{
	$id=$this->input->post('esc');
	$nombre=$this->input->post('nombre');
	$ape=$this->input->post('apellido');
	$edad=$this->input->post('edad');
	$digi=$this->input->post('digimon');
	$this->form_validation->set_rules('nombre','nombre','required');
	$this->form_validation->set_rules('apellido','apellido','required');
	$this->form_validation->set_rules('edad','edad','required');
	$this->form_validation->set_rules('digimon','digimon','required');
    $this->form_validation->set_message('required','El campo %s es Obligatorio');
	
	if ($this->form_validation->run() == FALSE)
	{
		$this->session->set_flashdata('mserroract','No se pudo actualizar el niño elegido cheque que todos los campos esten llenos o cumplan con lo requerido');
		
	}else{
		$dato=array(
      'nombre'=>$nombre,
      'apellido'=>$ape,
      'edad'=>$edad,
      'digimon'=>$digi

		);
       if($this->elegido_Model->cambiar($id,$dato))
       {

       	$this->session->set_flashdata('msact', 'Niño Elegido Actualizado');
       
       }
      	
	}
	$this->index(); 
}

public function borrarnino()
{
	$id=$this->uri->segment(3);
	if($this->elegido_Model->eliminar($id))
	{
       $this->session->set_flashdata('msel','Niño Elegido Eliminado');
       		$this->index();
	}
}

}
