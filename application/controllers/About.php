<?php
class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model', 'visitor_model');
		$this->load->model('Home_model', 'home_model');
		$this->load->model('Site_model', 'site_model');
		$this->visitor_model->count_visitor();
		$this->load->helper('text');
		error_reporting(0);
	}

	function index()
	{
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$data['bg_testimoni'] = $about->about_bg_testimonial;
		$data['testimonial'] = $this->db->get('tbl_testimonial');
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('about_view', $data);
	}
}
