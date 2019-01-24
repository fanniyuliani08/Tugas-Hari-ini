<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lima extends CI_Controller {

    public function index()
    {
        $data['konten']="lima";
        $this->load->view('template', $data, FALSE);
    }

}

/* End of file Dashboard.php */
