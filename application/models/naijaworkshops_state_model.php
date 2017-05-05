<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Naijaworkshops_state_model extends CI_Model
{

	public function getStates()
	{
		$states = $this->db->get('states');
		if ($states->num_rows() > 0) {
			foreach ($states->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}


	}


}
