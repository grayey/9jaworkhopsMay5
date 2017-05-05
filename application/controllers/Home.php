<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $set_session;

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        // call all states
        $this->load->model('naijaworkshops_state_model');
        $data['states'] = $this->naijaworkshops_state_model->getStates();


        // call all occupations
        $this->load->model('naijaworkshops_occupation_model');
        $data['occupations'] = $this->naijaworkshops_occupation_model->getOccupations();


        //load the data array that holds both states and occupations
        $this->load->view('home', $data);
    }

    public function about()
    {
        $this->load->view('about');
    }


    public function members()
    {
        $this->load->model('naijaworkshops_artisan_model');
        $data['memberss'] = $this->naijaworkshops_artisan_model->get_all_artisans();
        $this->load->view('members', $data);
    }

    public function login()
    {


        $this->load->view('login');

    }


    public function dashboard($dashboard_artisan, $dashboard_image)
    {
        $this->load->model('naijaworkshops_artisan_model');

        $data['dashboard_info'] = $this->naijaworkshops_artisan_model->artisan_dashboard_info($dashboard_artisan);

        $data['dashboard_gallery'] = $this->naijaworkshops_artisan_model->artisan_dashboard_gallery($dashboard_image);


        $this->load->view('dashboard/index', $data);
//       redirect('dashboard/index');
    }

    public function create_artisan()
    {
        $data['error'] = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $first_name = ucwords($this->input->post('first_name'));
            $last_name = ucwords($this->input->post('last_name'));
            $email = $this->input->post('email');
            $password = ucwords($this->input->post('password'));
            $confirm_password = ucwords($this->input->post('confirm_password'));
            $state = ucwords($this->input->post('state'));
            $lga = ucwords($this->input->post('lga'));
            $work_address = ucwords($this->input->post('work_address'));
            $telephone = ucwords($this->input->post('telephone'));
            $occupation = ucwords($this->input->post('occupation'));
            $sign_up_date = date('Y-m-d H:i:s');


            $this->form_validation->set_rules('first_name', 'trim | required');
            $this->form_validation->set_rules('last_name', 'trim|required');
            $this->form_validation->set_rules('email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('confirm_password', 'trim|required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone', 'trim|required|max_length[15]');
            $new_image = "";
            if ($this->form_validation->run() == TRUE) {
                $data['error'] = "<div class='alert alert-warning'>Please Fill All Required Fields!</div>";

                $this->load->view('home', $data);

            } else {
                $this->load->model('naijaworkshops_artisan_model');
                $data['error'] = "";

                $artisan_data = array(
                    'artisan_first_name' => $first_name,
                    'artisan_last_name' => $last_name,
                    'artisan_occupation_id' => $occupation,
                    'artisan_phone' => $telephone,
                    'artisan_email' => $email,
                    'artisan_password' => $password,
                    'artisan_address' => $work_address,
                    'lga_id' => $lga,
                    'date_created' => $sign_up_date
                );

                $new_artisan = $this->naijaworkshops_artisan_model->insert_artisan($artisan_data);


                $img = 'image';
                $image_path = $this->do_upload($img);
                $upload_path = $image_path['upload_data'];
                $full_path = "uploads/" . $upload_path['file_name'];
                $image_data = array(
                    'image' => $full_path,
                    'artisan_id' => $new_artisan,
                    'date_created' => $sign_up_date
                );
                $new_image = $this->naijaworkshops_artisan_model->insert_artisan_image($image_data);


            }

            if (!empty($new_artisan)) {
                $_SESSION['artisan'] = $new_artisan;
                $this->dashboard($new_artisan, $new_image);
            } else {
                $data["not_created"] = "Your account was not created!";
                $this->load->view('home', $data);
            }
        }
    }


    public function available_artisans()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $occupation = $this->input->post('search_occupation');
            $lga = $this->input->post('search_lga');
            $this->load->model('naijaworkshops_artisan_model');
            $data['sorted_artisans'] = $this->naijaworkshops_artisan_model->artisans_based_on_search($lga, $occupation);
            $this->load->view('available_artisans', $data);


        }

    }

    public function edit()
    {
        $this->load->view('dashboard/edit');

    }

    public function logout()
    {

        session_start();
        session_destroy();
        redirect('home');



    }


    public function do_upload($image)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        $data = array();

        if (!$this->upload->do_upload($image)) {
            echo 'upload did not work';
            $error = array('error' => $this->upload->display_errors());

        } else {
            $data = array('upload_data' => $this->upload->data());

        }

        return $data;
    }

    public function update_profile()
    {
        $last_update = date('Y-m-d H:i:s');
        $artisan_id = $_SESSION['artisan'];

        $artisan_data = array(
            'artisan_first_name' => $this->input->post('first_name'),
            'artisan_last_name' => $this->input->post('last_name'),
            'artisan_occupation_id' => $this->input->post('occupation'),
            'artisan_phone' => $this->input->post('phone'),
            'artisan_email' => $this->input->post('email'),
            'artisan_password' => $this->input->post('password'),
            'artisan_address' => $this->input->post('address'),
            'lga_id' => $this->input->post('lga'),
            'date_updated' => $last_update
        );
        $this->load->model('naijaworkshops_artisan_model');
        $updated = $this->naijaworkshops_artisan_model->update_artisan_details($artisan_data, $artisan_id);

        if ($updated == TRUE) {
            $data['success'] = "Details Upadated Successfully!";
            $this->load->view('dashboard/index', $data);

        }
    }


}

