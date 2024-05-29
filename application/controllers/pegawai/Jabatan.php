<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_jabatan");

    }

	public function index()
	{
		$data['page'] = 'pegawai/jabatan/v_jabatan_list';
		$data['title'] = 'jabatan';
		$data['title2'] = 'Data Jabatan';
		$data['jabatan'] = $this->M_jabatan->tampil_data();
        $this->load->view('layout_admin/main', $data);
      
	}

	public function tambah()
	{
		$data['page'] = 'pegawai/jabatan/v_jabatan_tambah';
		$data['title'] = 'Tambah Data jabatan';
		$this->load->view('layout_admin/main', $data);
	}

	public function _rules()
    {
        $this->form_validation->set_rules('jabatan', 'Nama jabatan', 'trim|required','min_lenght[4]');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	public function tambah_aksi()
	{
		$this->_rules();
		$id = $this->input->post('id');
        $jabatan = $this->input->post('jabatan');

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $data = array(
                'id' => $id,
                'jabatan' => $jabatan
               
            );
   
         $this->M_jabatan->input_data($data); 
         $this->session->set_flashdata('msg', 'Berhasil menyimpan data');
         redirect('pegawai/jabatan');
        }
	}

	public function edit($id)
	{
		$where = array('id' => $id);
        $data['jabatan'] = $this->M_jabatan->edit_data($where, 'jabatan')->result();
		$data['page'] = 'pegawai/jabatan/v_jabatan_edit';
		$data['title'] = 'Edit Data jabatan';
		$this->load->view('layout_admin/main', $data);
    }

    function update()
    { 
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->edit($this->input->post('id', true));
        }else{
            $data = array(
                'jabatan' => $this->input->post('jabatan', true),
            );
    
                $this->M_jabatan->update_data($this->input->post('id', true), $data, 'jabatan');

                $this->session->set_flashdata('msg', 'Data berhasil diubah');
                redirect(site_url('pegawai/Jabatan'));   
        }
    }
    
    public function hapus($id)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_jabatan->delete($id)) {
            redirect(site_url('pegawai/Jabatan'));
        }
    }

}
