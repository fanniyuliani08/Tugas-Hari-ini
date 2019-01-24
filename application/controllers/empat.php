<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empat extends CI_Controller {

    public function index()
    {
        $data['konten']="empat";
        $this->load->view('template', $data, FALSE);
    }

}

/* End of file Dashboard.php */
