<?php
// bikin controller dashboard
// bikin fungsi index yang menampilkan tulisan "ini halaman dashboard"
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('id')) {
            $this->session->set_flashdata('failed', 'Silahkan anda login terlebih dahulu');
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        // data untuk dikirim ke view
        $data = array(
            'page' => 'dashboard'
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
}
