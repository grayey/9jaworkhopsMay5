<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Naijaworkshops_lga_model extends CI_Model
{

	public function index($state)
	{
		$data = array();

		$lgas = $this->db->select('*')->from('lgas')->where('state_id', $state)->get();
		if ($lgas->num_rows() > 0) {
			foreach ($lgas->result() as $row) {
				$data[] = $row;
			}
		}

		return $data;
	}

}