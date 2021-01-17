<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {

	public function listing()
	{
		$this->db->from('trade_mark');
		$query  = $this->db->get();
		return $query->result();
	}

	public function brand($id_trademark)
	{
		$this->db->select(	'trade_mark.*,brand_mobil.id_brand,
							brand_mobil.nama_brand, brand_mobil.gambar_brand');
		$this->db->from('trade_mark');
		$this->db->join('brand_mobil','brand_mobil.id_trademark = trade_mark.id_trademark', 'LEFT');
		$this->db->where('trade_mark.id_trademark', $id_trademark);
		$this->db->order_by('id_trademark','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function varian($id_brand)
	{
		$this->db->select(	'brand_mobil.*,varian_mobil.id_varian,
							varian_mobil.nama_varian, varian_mobil.gambar_varian,varian_mobil.status');
		$this->db->from('brand_mobil');
		$this->db->join('varian_mobil','varian_mobil.id_brand = brand_mobil.id_brand', 'LEFT');
		$this->db->where('brand_mobil.id_brand', $id_brand);
		$this->db->order_by('id_brand','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function spek($id_varian)
	{
		$this->db->select('*');
		$this->db->from('varian_mobil');
		$this->db->where('id_varian',$id_varian);
		$this->db->order_by('id_varian');
		$query = $this->db->get();
		return $query->row();
	}

	public function cari($keywords)
	{
		$this->db->select('trade_mark.*,varian_mobil.id_varian,
						   	varian_mobil.nama_varian, varian_mobil.gambar_varian');
		$this->db->from('trade_mark');
		//Join 
		$this->db->join('varian_mobil', 'varian_mobil.id_trademark = trade_mark.id_trademark', 'LEFT');
		//end Join
		//Like
		$this->db->like('trade_mark.nama_trademark',$keywords);
		$this->db->or_like('varian_mobil.nama_varian',$keywords);
		$query = $this->db->get();
		return $query->result();
	}

	public function update($table = null, $data = null, $where = null)
	{
		$this->db->update($table, $data, $where);
	}
	
	public function favorit()
	{
		$this->db->select('*');
		$this->db->from('varian_mobil');
		$this->db->where('status', 1);
		$this->db->order_by('id_varian');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Mobil_model.php */
/* Location: ./application/models/Mobil_model.php */