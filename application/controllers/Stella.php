<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stella extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Penjadwalan', 'penjadwalan');
    }
    public function index()
    {
        $this->load->view('startView');
    }
    // Function to show All Data and Page
    public function all()
    {
        $data['matakulias'] = $this->penjadwalan->get_all();
        $this->load->view('allView', $data);
    }
    // Function to show Insert Page
    public function uInsert()
    {
        $this->load->view('insertView');
    }
    // Function to Insert Data
    public function uAdd()
    {
        $this->penjadwalan->uAdd();
        redirect(base_url('insert'));
    }
    // Function to show Schedules
    public function uShow()
    {
        $jumlah_data = $this->penjadwalan->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url(); // . 'index.php/welcome/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['query'] = $this->penjadwalan->uShows($config['per_page'], $from);

        // $data['query'] = $this->penjadwalan->uShows();
        $this->load->view('showView', $data);
    }
    // Function to delete data
    public function delete($kodemtk)
    {
        $this->penjadwalan->delete($kodemtk);
        redirect('all');
    }
    // Function to show Edit Page
    public function edit($kodemtk)
    {
        $data['jadwal'] = $this->penjadwalan->getById($kodemtk);
        $this->load->view('editView', $data);
    }
    // Function to update data
    public function update()
    {
        $kodemtk                = $this->input->post('kodemtk');
        $data['namamtk']        = $this->input->post('namamtk');
        $data['namadosen']      = $this->input->post('namadosen');
        $data['ruang']          = $this->input->post('ruang');
        $data['kelas']          = $this->input->post('kelas');
        $data['hari']           = $this->input->post('hari');
        $data['mulai']          = $this->input->post('mulai');
        $data['selesai']        = $this->input->post('selesai');
        $data['fakultas']       = $this->input->post('fakultas');
        $data['tempat']         = $this->input->post('tempat');
        $data['keterangan']     = $this->input->post('keterangan');
        $this->penjadwalan->update($data, $kodemtk);
        redirect('all');
    }

    // Just sample, Ignore!
    public function world()
    {
        $this->load->view('start');
    }
}
