<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Naijaworkshops_occupation_model extends CI_Model
{
	public function getOccupations()
	{
		$this->db->select('*');
		$this->db->order_by('occupation_name', 'asc');
		$this->db->from('occupation');
		$occupations = $this->db->get();
		if ($occupations->num_rows() > 0) {
			foreach ($occupations->result() as $row) {
				$data[] = $row;
			}

			return $data;

		}


	}

}
