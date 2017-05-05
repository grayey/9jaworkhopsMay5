<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class All_lgas extends CI_Controller
{
	
	public function index()
	{	
		
		if (isset($_POST['state_id'])) {
			
			
			$state_id = $_POST['state_id'];
			
			$this->load->model('naijaworkshops_lga_model');
			$data = $this->naijaworkshops_lga_model->index($state_id);

			$lgas = array();

			foreach ($data as $row) {
				// $lgas = $result = array('id' =>$row->lga_id, 'lga_name' => $row->lga_name);

				$lgas[] = array('id'=>$row->lga_id,'name'=>$row->lga_name);
			}
			
			echo json_encode($lgas);

		}	
	}
}