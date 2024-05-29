<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_pegawai");
        $this->load->model("M_jabatan");
        $this->load->model("M_kontrak");

    }

	public function index()
	{
		$data['page'] = 'pegawai/pegawai/v_pegawai_list';
		$data['title'] = 'Pegawai';
		$data['title2'] = 'Data pegawai';
        $data['jabatan'] = $this->M_jabatan->tampil_data();
		$data['kontrak'] = $this->M_kontrak->tampil_data();
		$data['pegawai'] = $this->M_pegawai->tampil_data();

        $this->load->view('layout_admin/main', $data);
      
	}

	public function tambah()
	{
        $data['jabatan'] = $this->M_jabatan->tampil_data();
		$data['kontrak'] = $this->M_kontrak->tampil_data();
		$data['page'] = 'pegawai/pegawai/v_pegawai_tambah';
		$data['title'] = 'Tambah Data pegawai';
		$this->load->view('layout_admin/main', $data);

	}

	public function _rules()
    {
        $this->form_validation->set_rules('nip', 'NIP pegawai', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama pegawai', 'trim|required','min_lenght[4]');
        $this->form_validation->set_rules('kota', 'trim|required');
        $this->form_validation->set_rules('gaji', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'trim|required');
        $this->form_validation->set_rules('kontrak', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	public function tambah_aksi()
	{
		$this->_rules();
		$id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $gaji = $this->input->post('gaji');
        $jabatan = $this->input->post('jabatan');
        $kontrak = $this->input->post('kontrak');
        

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $data = array(
                'id' => $id,
                'nip' => $nip,
                'nama' => $nama,
                'kota' => $kota,
                'gaji' => $gaji,
                'jabatan' => $jabatan,
                'kontrak' => $kontrak
               
            );
   
         $this->M_pegawai->input_data($data); 
         $this->session->set_flashdata('msg', 'Berhasil menyimpan data');
         redirect('pegawai/pegawai');
        }
	}

	public function edit($id)
	{
		$where = array('id' => $id);
        $data['pegawai'] = $this->M_pegawai->edit_data($where, 'pegawai')->result();
        $data['jabatan'] = $this->M_jabatan->tampil_data();
		$data['kontrak'] = $this->M_kontrak->tampil_data();
		$data['page'] = 'pegawai/pegawai/v_pegawai_edit';
		$data['title'] = 'Edit Data pegawai';
		$this->load->view('layout_admin/main', $data);
    }

    function update()
    { 
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->edit($this->input->post('id', true));
        }else{
            $data = array(
                'nip' => $this->input->post('nip', true),
                'nama' => $this->input->post('nama', true),
                'kota' => $this->input->post('kota', true),
                'gaji' => $this->input->post('gaji', true),
                'jabatan' => $this->input->post('jabatan', true),
                'kontrak' => $this->input->post('kontrak', true)
            );
    
                $this->M_pegawai->update_data($this->input->post('id', true), $data, 'pegawai');

                $this->session->set_flashdata('msg', 'Data berhasil diubah');
                redirect(site_url('pegawai/Pegawai'));   
        }
    }
    
    public function hapus($id)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_pegawai->delete($id)) {
            redirect(site_url('pegawai/pegawai'));
        }
    }

}
