<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('mobil_model');
	}

	public function index()
	{
		$valid = $this->form_validation;

		$valid->set_rules('cari', 'Kata Kunci' , 'required', 
				 array('required' => 'Kata Kunci Harus Diisi'));

		if($valid->run())
		{
			$cari = strip_tags($this->input->post('cari'));
			$keywords = str_replace(' ','-',$cari);
			redirect(base_url('home/cari/'.$keywords), 'refresh');
		}

		$trademark = $this->mobil_model->listing();
		$data = array(
						'trademark' => $trademark,
						'isi' => 'home'
				);

		$this->load->view('layout/wrapper', $data);		
	}

	public function brand($id_trademark)
	{
		$brand = $this->mobil_model->brand($id_trademark);

		$data = array(	'brand'	=>	$brand,
						'isi'	=>	'brand'
				);

		$this->load->view('layout/wrapper', $data);	
	}

	public function varian($id_brand)
	{

		$varian = $this->mobil_model->varian($id_brand);

		$data = array(	'varian'	=>	$varian,
						'isi'		=>	'varian'
				);

		$this->load->view('layout/wrapper', $data);	
	}

	public function spesifikasi($id_varian)
	{
		$spek = $this->mobil_model->spek($id_varian);

		$data = array(	'spek' => $spek,
						'isi' => 'spek'
					);

		$this->load->view('layout/wrapper', $data);
	}

	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->mobil_model->cari($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
		     		'label'	=> $row->nama_varian,
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

	public function cari()
	{
		$keywords = $this->input->get('cari');
		$mobil = $this->mobil_model->cari($keywords);

		$data = array(
			'title'		=> 'Hasi Pencarian: '.$keywords.' ('.count($mobil). ' Mobil )',
			'mobil'		=>  $mobil,
			'keywords'	=>	$keywords,
			'isi'		=> 'cari'
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function status($id_brand)
	{
		if(!is_numeric($this->uri->segment(4)) || !is_numeric($this->uri->segment(5)))
		{
			redirect('home/varian/'.$id_brand);
		}

		$this->mobil_model->update('varian_mobil', ['status' => $this->uri->segment(4)], ['id_varian' => $this->uri->segment(5)]);

		redirect('home/varian/'.$id_brand);	
	}

	public function favorit()
	{
		
		$favorit = $this->mobil_model->favorit();

		$data  = array(
				'favorit'	=> $favorit,
				'isi' => 'favorit'
		);

		$this->load->view('layout/wrapper', $data);
	}

	public function favorit_update($id_varian)
	{
		$this->mobil_model->update('varian_mobil', ['status' => 2], ['id_varian' => $id_varian]);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus dari favorit');
		redirect('home/favorit');	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */