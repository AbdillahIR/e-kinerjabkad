<?php

class Pegawai extends CI_Controller
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

        $this->load->model('PegawaiModel');
        // data untuk dikirim ke view
        $data = array(
            'page' => 'pegawai',
            'pegawai' => $this->PegawaiModel->getAll()->result_array()
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pegawai', $data);
        $this->load->view('admin/footer');
    }

    // bikin fungsi namanya create
    // di dalamnya menampilkan halaman tambah pegawai
    public function create()
    {
        // menetapkan rules pada masing masing inputan
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        // cek validasi apakah sudah dijalankan apa belum?
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'page' => 'pegawai',
                'jabatan' => $this->db->get('jabatan')->result_array()
            );

            $this->load->view('admin/header', $data);
            $this->load->view('admin/pegawai_tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('PegawaiModel');
            // parsing data dari formulir pegawai

            $upload = $this->do_upload();

            $data = [
                "nama" => $this->input->post('nama_lengkap'),
                "nip" => $this->input->post('nip'),
                "jk" => $this->input->post('jk'),
                "tmp_lahir" => $this->input->post('tmp_lahir'),
                "tgl_lahir" => $this->input->post('tgl_lahir'),
                "kode_jabatan" => $this->input->post('jabatan'),
                "email" => $this->input->post('email'),
                "no_tlp" => $this->input->post('no_tlp'),
                "alamat" => $this->input->post('alamat'),
                "img" => $upload,
            ];

            if ($upload != null) {
                $this->PegawaiModel->simpan($data);
                // jika berhasil kembalik ke halaman pegawai dengan notifikasi data berhasil disimpan
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
                redirect(base_url('pegawai'));
            } else {
                // jika berhasil kembali ke halaman pegawai dengan notifikasi data gagal disimpan
                $this->session->set_flashdata('failed', 'Data gagal disimpan');
                redirect(base_url('pegawai'));
            }
        }
    }

    public function do_upload()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        // konfigurasi upload

        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx';
        $config['max_size'] = 2000;

        $this->upload->initialize($config);

        if (! $this->upload->do_upload('img')) {
            //jika upload gagal
            $error = array('error' => $this->upload->display_errors());
            // tampilkan kembali form upload dengan pesan error
            return null;
        } else {
            // jika upload berhasil
            $data = array('upload_data' => $this->upload->data());

            return $data['upload_data']['file_name'];
        }
    }

    public function delete($id)
    {
        // proses hapus
        $this->load->model('PegawaiModel');
        $this->PegawaiModel->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect(base_url('pegawai'));
    }

    public function delete_api($id)
    {
        $this->load->model('PegawaiModel');
        $this->PegawaiModel->hapus($id);

        $response = [
            "status" => 'success',
            "message" => 'Data berhasil dihapus'
        ];
        echo json_encode($response);
    }
    public function edit($id)
    {
        // proses edit


        // $this->PegawaiModel->edit($id);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        // cek validasi apakah sudah dijalankan apa belum?
        if ($this->form_validation->run() == FALSE) {
            $this->load->model('PegawaiModel');

            $data = [
                'page' => 'pegawai',
                'jabatan' => $this->db->get('jabatan')->result_array(),
                'pegawai' => $this->PegawaiModel->getById($id)->row_array()
            ];

            $this->load->view('admin/header', $data);
            $this->load->view('admin/pegawai_edit', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('PegawaiModel');
            // parsing data dari formulir pegawai

            $data = [
                "nama" => $this->input->post('nama_lengkap'),
                "nip" => $this->input->post('nip'),
                "jk" => $this->input->post('jk'),
                "tmp_lahir" => $this->input->post('tmp_lahir'),
                "tgl_lahir" => $this->input->post('tgl_lahir'),
                "kode_jabatan" => $this->input->post('jabatan'),
                "email" => $this->input->post('email'),
                "no_tlp" => $this->input->post('no_tlp'),
                "alamat" => $this->input->post('alamat'),
            ];
            $this->PegawaiModel->edit($id, $data);

            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('pegawai'));
        }
    }
    public function detail($id)
    {
        $this->load->model('PegawaiModel');
        $pegawai = $this->PegawaiModel->getById($id)->row_array();
        $data = [
            'page' => 'pegawai',
            'pegawai' => $pegawai

        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/pegawai_detail', $data);
        $this->load->view('admin/footer');
    }
}
