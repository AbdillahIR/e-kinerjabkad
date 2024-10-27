<?php
class Blur extends CI_Controller
{
    public function index()
    {
        $data = array(
            'page' => 'dashboard'
        );
        $this->load->view('admin/blur');
    }
}
