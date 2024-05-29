<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_kontrak");

    }

	public function index()
	{
		$data['page'] = 'pegawai/kontrak/v_kontrak_list';
		$data['title'] = 'kontrak';
		$data['title2'] = 'Data kontrak';
		$data['kontrak'] = $this->M_kontrak->tampil_data();
        $this->load->view('layout_admin/main', $data);
      
	}

	public function tambah()
	{
		$data['page'] = 'pegawai/kontrak/v_kontrak_tambah';
		$data['title'] = 'Tambah Data kontrak';
		$this->load->view('layout_admin/main', $data);
	}

	public function _rules()
    {
        $this->form_validation->set_rules('kontrak', 'Kontrak', 'trim|required','min_lenght[4]');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	public function tambah_aksi()
	{
		$this->_rules();
		$id = $this->input->post('id');
        $kontrak = $this->input->post('kontrak');

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $data = array(
                'id' => $id,
                'kontrak' => $kontrak
               
            );
   
         $this->M_kontrak->input_data($data); 
         $this->session->set_flashdata('msg', 'Berhasil menyimpan data');
         redirect('pegawai/Kontrak');
        }
	}

	public function edit($id)
	{
		$where = array('id' => $id);
        $data['kontrak'] = $this->M_kontrak->edit_data($where, 'kontrak')->result();
		$data['page'] = 'pegawai/kontrak/v_kontrak_edit';
		$data['title'] = 'Edit Data kontrak';
		$this->load->view('layout_admin/main', $data);
    }

    function update()
    { 
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->edit($this->input->post('id', true));
        }else{
            $data = array(
                'kontrak' => $this->input->post('kontrak', true),
            );
    
                $this->M_kontrak->update_data($this->input->post('id', true), $data, 'kontrak');

                $this->session->set_flashdata('msg', 'Data berhasil diubah');
                redirect(site_url('pegawai/Kontrak'));   
        }
    }
    
    public function hapus($id)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_kontrak->delete($id)) {
            redirect(site_url('pegawai/Kontrak'));
        }
    }

}
