<?php
// bikin controller dashboard
// bikin fungsi index yang menampilkan tulisan "ini halaman dashboard"
class Lpj extends CI_Controller
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
            'page' => 'lpj'
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/lpj');
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('keterangan_kegiatan', 'Keterangan Laporan Pertanggungjawaban', 'required');
        $this->form_validation->set_rules('lpj_kegiatan', 'File LPJ', 'required');

        if ($this->form_validation->run() == false) {
            $data = array(
                'page' => 'lpj',
                'lpj' => ''
            );
            $this->load->view('admin/header', $data);
            $this->load->view('admin/lpj_tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('LpjModel');

            $data = [
                "keterangan_kegiatan" => $this->input->post('keterangan_kegiatan'),
                "lpj_kegiatan" => $this->input->post('lpj_kegiatan'),
            ];
            $this->LpjModel->simpan($data);

            $this->session->set_flashdata('success', 'Data telah berhasil disimpan');
            redirect(base_url('lpj'));
        }
    }
}
