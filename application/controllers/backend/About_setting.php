<?php

class About_setting extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('backend/Setting_model', 'setting_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index()
	{
		$data = $this->setting_model->get_about_data()->row();
		$x['about_id'] = $data->about_id;
		$x['about_img'] = $data->about_image;
		$x['about_img2'] = $data->about_image2;
		$x['about_desc'] = $data->about_description;
		$x['about_desc2'] = $data->about_description2;
		$x['about_desc3'] = $data->about_description3;
		$this->load->view('backend/v_about_setting', $x);
	}

	function update()
	{
		$about_id = htmlspecialchars($this->input->post('about_id', TRUE), ENT_QUOTES);
		$description = $this->input->post('description', TRUE);
		$description2 = $this->input->post('description2', TRUE);
		$description3 = $this->input->post('description3', TRUE);

		$config['upload_path'] = './theme/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['img_about']['name']) && !empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about')) {
				$img_about = $this->upload->data();
				$bg_about = $img_about['file_name'];
			}
			if ($this->upload->do_upload('img_about2')) {
				$img_about2 = $this->upload->data();
				$bg_about2 = $img_about2['file_name'];
			}
			$this->setting_model->update_information_about($about_id, $description, $description2, $description3, $bg_about, $bg_about2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (!empty($_FILES['img_about']['name']) && empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about')) {
				$img_about = $this->upload->data();
				$bg_about = $img_about['file_name'];
			}
			$this->setting_model->update_information_about1($about_id, $description, $bg_about);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (empty($_FILES['img_about']['name']) && !empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about2')) {
				$img_about2 = $this->upload->data();
				$bg_about2 = $img_about2['file_name'];
			}
			$this->setting_model->update_information_about2($about_id, $description, $bg_about2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (!empty($_FILES['img_about']['name']) && empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about')) {
				$img_about = $this->upload->data();
				$bg_about = $img_about['file_name'];
			}
			$this->setting_model->update_information_about3($about_id, $description2, $bg_about);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (empty($_FILES['img_about']['name']) && !empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about2')) {
				$img_about2 = $this->upload->data();
				$bg_about2 = $img_about2['file_name'];
			}
			$this->setting_model->update_information_about4($about_id, $description2, $bg_about2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (!empty($_FILES['img_about']['name']) && empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about')) {
				$img_about = $this->upload->data();
				$bg_about = $img_about['file_name'];
			}
			$this->setting_model->update_information_about5($about_id, $description3, $bg_about);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} elseif (empty($_FILES['img_about']['name']) && !empty($_FILES['img_about2']['name'])) {
			if ($this->upload->do_upload('img_about2')) {
				$img_about2 = $this->upload->data();
				$bg_about2 = $img_about2['file_name'];
			}
			$this->setting_model->update_information_about6($about_id, $description3, $bg_about2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} else {
			$this->setting_model->update_information_about_noimg($about_id, $description, $description2, $description3);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		}
	}
}
