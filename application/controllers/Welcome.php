<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['website'] = $this->db->get('tbl_website')->row();
		// $this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['run1'] = $this->db->get('tbl_running_text')->row();
		$this->data['shop'] = $this->db->get('tbl_shop')->result();
		$this->data['sosmed'] = $this->db->get('tbl_sosmed')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->data['tolen'] = $this->db->get('tbl_online_shop')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}