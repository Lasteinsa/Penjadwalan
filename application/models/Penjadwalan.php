<?php


class Penjadwalan extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_all()
    {
        $matakulias = $this->db->get("matakuliah")->result();
        return $matakulias;
    }
    public function uAdd()
    {
        $kodemtk    = $this->input->post('kodemtk');
        $namamtk    = $this->input->post('namamtk');
        $namadosen  = $this->input->post('namadosen');
        $ruang      = $this->input->post('ruang');
        $kelas      = $this->input->post('kelas');
        $hari       = $this->input->post('hari');
        $mulai      = $this->input->post('mulai');
        $selesai    = $this->input->post('selesai');
        $fakultas   = $this->input->post('fakultas');
        $tempat     = $this->input->post('tempat');
        $keterangan = $this->input->post('keterangan');

        $data   = array(
            'kodemtk'   => $kodemtk,
            'namamtk'   => $namamtk,
            'namadosen' => $namadosen,
            'ruang'     => $ruang,
            'kelas'     => $kelas,
            'hari'      => $hari,
            'mulai'     => $mulai,
            'selesai'   => $selesai,
            'fakultas'  => $fakultas,
            'tempat'    => $tempat,
            'keterangan' => $keterangan
        );

        $result = $this->db->insert('matakuliah', $data);
        return $result;
    }
    public function uShows($number, $offset)
    {
        setlocale(LC_TIME, 'id_ID', 'Indonesian_indonesia', 'Indonesia');
        $hari       = strftime('%A');
        $fakultas   = $this->input->post('fakultas');
        $tempat     = $this->input->post('tempat');

        $query = $this->db->get_Where('matakuliah', array('fakultas' => $fakultas, 'tempat' => $tempat, 'hari' => $hari), $number, $offset)->result();
        return $query;
    }
    function jumlah_data()
    {
        return $this->db->get('matakuliah')->num_rows();
    }
}
