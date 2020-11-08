<?php

class Setting_model extends CI_Model
{

	function get_home_data()
	{
		$query = $this->db->get('tbl_home', 1);
		return $query;
	}

	function update_information($home_id, $caption1, $caption2, $caption3, $title1, $title2, $title3, $title4, $bg_heading, $bg_testimoni)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_title_2', $title2);
		$this->db->set('home_title_3', $title3);
		$this->db->set('home_title_4', $title4);
		$this->db->set('home_bg_heading', $bg_heading);
		$this->db->set('home_bg_testimonial', $bg_testimoni);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_heading($home_id, $caption1, $caption2, $caption3, $title1, $title2, $title3, $title4, $bg_heading)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_title_2', $title2);
		$this->db->set('home_title_3', $title3);
		$this->db->set('home_title_4', $title4);
		$this->db->set('home_bg_heading', $bg_heading);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_testimoni($home_id, $caption1, $caption2, $caption3, $title1, $title2, $title3, $title4, $bg_testimoni)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_title_2', $title2);
		$this->db->set('home_title_3', $title3);
		$this->db->set('home_title_4', $title4);
		$this->db->set('home_bg_testimonial', $bg_testimoni);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_noimg($home_id, $caption1, $caption2, $caption3, $title1, $title2, $title3, $title4)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_title_2', $title2);
		$this->db->set('home_title_3', $title3);
		$this->db->set('home_title_4', $title4);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	// about information

	function get_about_data()
	{
		$query = $this->db->get('tbl_about', 1);
		return $query;
	}

	function update_information_about($about_id, $description, $description2, $description3, $image, $image2)
	{
		$this->db->set('about_image2', $image2);
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->set('about_description2', $description2);
		$this->db->set('about_description3', $description3);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about1($about_id, $description, $image)
	{
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}
	function update_information_about2($about_id, $description, $image2)
	{
		$this->db->set('about_image2', $image2);
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about3($about_id, $description2, $image)
	{
		$this->db->set('about_image', $image);
		$this->db->set('about_description2', $description2);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}
	function update_information_about4($about_id, $description2, $image2)
	{
		$this->db->set('about_image2', $image2);
		$this->db->set('about_description2', $description2);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about5($about_id, $description3, $image)
	{
		$this->db->set('about_image', $image);
		$this->db->set('about_description3', $description3);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}
	function update_information_about6($about_id, $description3, $image2)
	{
		$this->db->set('about_image2', $image2);
		$this->db->set('about_description3', $description3);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about_noimg($about_id, $description, $description2, $description3)
	{
		$this->db->set('about_description', $description);
		$this->db->set('about_description2', $description2);
		$this->db->set('about_description3', $description3);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}
	// function update_information_about_noimg1($about_id, $description)
	// {
	// 	$this->db->set('about_description', $description);
	// 	$this->db->where('about_id', $about_id);
	// 	$this->db->update('tbl_about');
	// }
	// function update_information_about_noimg2($about_id, $description2)
	// {
	// 	$this->db->set('about_description2', $description2);
	// 	$this->db->where('about_id', $about_id);
	// 	$this->db->update('tbl_about');
	// }
	// function update_information_about_noimg3($about_id, $description3)
	// {
	// 	$this->db->set('about_description3', $description3);
	// 	$this->db->where('about_id', $about_id);
	// 	$this->db->update('tbl_about');
	// }

	// INFO information

	function get_info_data()
	{
		$query = $this->db->get('tbl_visimisi', 1);
		return $query;
	}

	function update_information_info($info_id, $info_1, $info_2, $info_3)
	{
		$this->db->set('info_3', $info_3);
		$this->db->set('info_2', $info_2);
		$this->db->set('info_1', $info_1);
		$this->db->where('info_id', $info_id);
		$this->db->update('tbl_info');
	}

	function update_information_info1($info_id, $info_1)
	{
		$this->db->set('info_1', $info_1);
		$this->db->where('info_id', $info_id);
		$this->db->update('tbl_info');
	}

	function update_information_info2($info_id, $info_2)
	{
		$this->db->set('info_2', $info_2);
		$this->db->where('info_id', $info_id);
		$this->db->update('tbl_info');
	}

	function update_information_info3($info_id, $info_3)
	{
		$this->db->set('info_3', $info_3);
		$this->db->where('info_id', $info_id);
		$this->db->update('tbl_info');
	}
}
