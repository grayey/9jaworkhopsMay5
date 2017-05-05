<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/25/2017
 * Time: 10:11 AM
 */
class Naijaworkshops_artisan_model extends CI_Model
{


    public function insert_artisan($data)
    {
        $this->db->insert('artisans', $data);
        $new_artisan = $this->db->insert_id();
        return $new_artisan;
    }


    public function artisan_dashboard_info($new_artisan)
    {
        $data = array();

        // join all tables to display full details of the artisan

        $artisan_array = $this->db->select('*')->from('artisans a')->join('occupation o', 'a.artisan_occupation_id=o.occupation_id')->join('lgas l', 'a.lga_id=l.lga_id')->join('states s', 's.state_id=l.state_id')->where('artisan_id', $new_artisan)->get();

        if ($artisan_array->num_rows() > 0) {
            foreach ($artisan_array->result() as $artisan_info) {
                $data[] = $artisan_info;
            }
        } else {
            echo "Nothing found!";
        }
        return $data;
    }


    public function artisan_dashboard_gallery($new_image)
    {
// get all images of particular artisan to display gallery on his personal dashboard

        $images = $this->db->select('*')->from('images')->where('image_id', $new_image)->get();
        $data = array();

        if ($images->num_rows() > 0) {
            foreach ($images->result() as $image) {
                $data[] = $image;
            }
        } else {
            $data['no_image'] = "There are no matching images!";
        }
        return $data;
    }


    public function get_all_artisans()
    {

        //get all artisans and send to members page display on members page

        $data = array();
        $all_artisans = $this->db->get('artisans');
        if ($all_artisans->num_rows() > 0) {
            foreach ($all_artisans->result() as $single_artisan) {
                $data[] = $single_artisan;
            }

        }
        return $data;

    }

    public function artisans_based_on_search($lga, $occupation)
    {
//return artisans based on hirers' occupation and lga search
        // $?

        $data = array();
        $artisans_based_on_search = $this->db->select('*')->from('artisans a')->join('lgas b', 'a.lga_id=b.lga_id')->join('occupation c', 'a.artisan_occupation_id=c.occupation_id')->join('states d', 'b.state_id=d.state_id')->join('images i', 'i.artisan_id=a.artisan_id')->where('b.lga_id', $lga)->where('c.occupation_id', $occupation)->get();
        if ($artisans_based_on_search->num_rows() > 0) {
            foreach ($artisans_based_on_search->result() as $artisan_based_on_search) {
                $data[] = $artisan_based_on_search;
            }
        }

        return $data;

    }


    public function insert_artisan_image($data)
    {
        $this->db->insert('images', $data);
        $image_id = $this->db->insert_id();
        return $image_id;
    }

    public function update_artisan_details($data,$id){
        $this->db->where('artisan_id',$id);
        $this->db->update('artisans', $data);
        return true;
    }

}