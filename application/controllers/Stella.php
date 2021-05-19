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
    public function all()
    {
        $data['matakulias'] = $this->penjadwalan->get_all();
        $this->load->view('allView', $data);
    }
    public function uInsert()
    {
        $this->load->view('insertView');
    }
    public function uAdd()
    {
        $this->penjadwalan->uAdd();
        redirect(base_url('insert'));
    }

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
    function delete($kodemtk)
    {
        $this->penjadwalan->delete($kodemtk);
        redirect('all');
    }

    // Just sample
    public function world()
    {
        $this->load->view('start');
    }
}
