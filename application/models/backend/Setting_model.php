<?php

class Setting_model extends CI_Model
{

	function get_home_data()
	{
		$query = $this->db->get('tbl_home', 1);
		return $query;
	}

	function update_information($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_1, $bg_2, $bg_3)
	{
		$this->db->set('home_name_1', $name1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_bg_1', $bg_1);
		$this->db->set('home_name_2', $name2);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_bg_2', $bg_2);
		$this->db->set('home_name_3', $name3);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_bg_3', $bg_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_1($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_1)
	{
		$this->db->set('home_name_1', $name1);
		$this->db->set('home_name_2', $name2);
		$this->db->set('home_name_3', $name3);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_bg_1', $bg_1);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_2($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_2)
	{
		$this->db->set('home_name_1', $name1);
		$this->db->set('home_name_2', $name2);
		$this->db->set('home_name_3', $name3);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_bg_2', $bg_2);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_3($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3, $bg_3)
	{
		$this->db->set('home_name_1', $name1);
		$this->db->set('home_name_2', $name2);
		$this->db->set('home_name_3', $name3);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_bg_3', $bg_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_noimg($home_id, $name1, $name2, $name3, $caption1, $caption2, $caption3)
	{
		$this->db->set('home_name_1', $name1);
		$this->db->set('home_name_2', $name2);
		$this->db->set('home_name_3', $name3);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	// about information

	function get_about_data()
	{
		$query = $this->db->get('tbl_about', 1);
		return $query;
	}

	function update_information_about($about_id, $description, $image)
	{
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about_noimg($about_id, $description)
	{
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	// visimisi information

	function get_visimisi_data()
	{
		$query = $this->db->get('tbl_visimisi', 1);
		return $query;
	}

	function update_information_visimisi($visimisi_id, $description, $image)
	{
		$this->db->set('visimisi_image', $image);
		$this->db->set('visimisi_description', $description);
		$this->db->where('visimisi_id', $visimisi_id);
		$this->db->update('tbl_visimisi');
	}

	function update_information_visimisi_noimg($visimisi_id, $description)
	{
		$this->db->set('visimisi_description', $description);
		$this->db->where('visimisi_id', $visimisi_id);
		$this->db->update('tbl_visimisi');
	}
}
