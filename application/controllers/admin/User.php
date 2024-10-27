<?php

class User extends CI_Controller
{
    public function index()
    {

        $data = [
            "page" => 'user',
            "users" => $this->db->get("users")->result_array()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'nama lengkap', 'required|min_length[3]');
        $this->form_validation->set_rules('no_tlp', 'no telepon', 'required|min_length[11]|max_length[13]|numeric|is_unique[users.no_tlp]');
        $this->form_validation->set_rules('nip', 'nip', 'required|min_length[10]|max_length[16]|numeric');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');


        // cek validasi
        if ($this->form_validation->run() == FALSE) {
            // jika validasi false
            // tampilkan form registrasi
            $data = [
                "page" => 'user',
            ];

            $this->load->view('admin/header', $data);
            $this->load->view('admin/user_tambah');
            $this->load->view('admin/footer');
        } else {
            $data = [
                "nama" => $this->input->post('name'),
                "no_tlp" => $this->input->post('no_tlp'),
                "nip" => $this->input->post('nip'),
                "email" => $this->input->post('email'),
                "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                "role" => $this->input->post('role'),
            ];

            $this->load->model('UserModel');
            $this->UserModel->simpan($data);

            $this->session->set_flashdata('success', 'user baru telah ditambahkan');
            redirect(base_url('user'));
        }
    }
    public function delete($id)
    {
        // proses hapus
        $this->load->model('UserModel');
        $this->PegawaiModel->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect(base_url('user'));
    }

    public function delete_api($id)
    {
        $this->load->model('UserModel');
        $this->UserModel->hapus($id);

        $response = [
            "status" => 'success',
            "message" => 'Data berhasil dihapus'
        ];
        echo json_encode($response);
    }
}
