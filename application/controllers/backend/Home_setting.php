<?php

class Home_setting extends CI_Controller
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
		$data = $this->setting_model->get_home_data()->row();
		$x['home_id'] = $data->home_id;
		$x['name_1'] = $data->home_name_1;
		$x['name_2'] = $data->home_name_2;
		$x['name_3'] = $data->home_name_3;
		$x['caption_1'] = $data->home_caption_1;
		$x['caption_2'] = $data->home_caption_2;
		$x['caption_3'] = $data->home_caption_3;
		$x['image_1'] = $data->home_bg_1;
		$x['image_2'] = $data->home_bg_2;
		$x['image_3'] = $data->home_bg_3;
		$this->load->view('backend/v_home_setting', $x);
	}

	function update()
	{
		$home_id = htmlspecialchars($this->input->post('home_id', TRUE), ENT_QUOTES);
		$name1 = htmlspecialchars($this->input->post('name1', TRUE), ENT_QUOTES);
		$name2 = htmlspecialchars($this->input->post('name2', TRUE), ENT_QUOTES);
		$name3 = htmlspecialchars($this->input->post('name3', TRUE), ENT_QUOTES);
		$caption1 = htmlspecialchars($this->input->post('caption1', TRUE), ENT_QUOTES);
		$caption2 = htmlspecialchars($this->input->post('caption2', TRUE), ENT_QUOTES);
		$caption3 = htmlspecialchars($this->input->post('caption3', TRUE), ENT_QUOTES);

		$config['upload_path'] = './theme/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['img_1']['name']) && !empty($_FILES['img_2']['name']) && !empty($_FILES['img_3']['name'])) {
			if ($this->upload->do_upload('img_1')) {
				$img_1 = $this->upload->data();
				$bg_1 = $img_1['file_name'];
			}
			if ($this->upload->do_upload('img_2')) {
				$img_2 = $this->upload->data();
				$bg_2 = $img_2['file_name'];
			}
			if ($this->upload->do_upload('img_3')) {
				$img_3 = $this->upload->data();
				$bg_3 = $img_3['file_name'];
			}
			$this->setting_model->update_information($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_1, $bg_2, $bg_3);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (!empty($_FILES['img_1']['name']) && empty($_FILES['img_2']['name']) && empty($_FILES['img_3']['name'])) {
			if ($this->upload->do_upload('img_1')) {
				$img_1 = $this->upload->data();
				$bg_1 = $img_1['file_name'];
			}
			$this->setting_model->update_information_1($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_1);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (empty($_FILES['img_1']['name']) && !empty($_FILES['img_2']['name']) && !empty($_FILES['img_3']['name'])) {
			if ($this->upload->do_upload('img_2')) {
				$img_2 = $this->upload->data();
				$bg_2 = $img_2['file_name'];
			}
			$this->setting_model->update_information_2($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (empty($_FILES['img_1']['name']) && !empty($_FILES['img_2']['name']) && !empty($_FILES['img_3']['name'])) {
			if ($this->upload->do_upload('img_3')) {
				$img_3 = $this->upload->data();
				$bg_3 = $img_3['file_name'];
			}
			$this->setting_model->update_information_3($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_3);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} else {
			$this->setting_model->update_information_noimg($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		}
	}
}
