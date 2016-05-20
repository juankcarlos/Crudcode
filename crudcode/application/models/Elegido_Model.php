<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elegido_model extends CI_Model {

	public function getTodos()
	{
		$todos=$this->db->get('elegido');
		return $todos->result();
	}
	public function agregar($dato)
	{
		$this->db->insert('elegido',$dato);
		if($this->db->affected_rows()>0)
		{
           return  true;
		}else
		{
			return false;
		}
	}
	public function obtenerporid($id){
		$this->db->where('id',$id);
		$query=$this->db->get('elegido');
		if($query->num_rows()==1)
		{
          return $query->row();
		}else
		{
			return null;
		}

	}
	public function cambiar($id,$datos)
	{
		$this->db->where('id',$id);
		$quey=$this->db->update('elegido',$datos);
	     if($this->db->affected_rows()>0)
	     {
	     	return true;
	     }else{
	     	return false;;
	     }
	}
	public function eliminar($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('elegido'))
		{
			return true;
		}else
		{
			return false;
		}
	}
}