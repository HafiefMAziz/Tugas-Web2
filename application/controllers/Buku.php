<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('buku_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read pada buku model
        //function read berfungsi mengambil/read data dari table buku di database
        $data_buku = $this->buku_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Daftar Buku',

            //data buku dikirim ke view
            'data_buku' => $data_buku
        );

        //memanggil file view
        $this->load->view('buku_read', $output);
    }

    public function insert()
    {
        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Tambah Buku',
        );

        //memanggil file view
        $this->load->view('buku_insert', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $judul = $this->input->post('judul');
        $stok = $this->input->post('stok');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'judul' => $judul,
            'stok' => $stok,
        );

        //memanggil function insert pada buku model
        //function insert berfungsi menyimpan/create data ke table buku di database
        $data_buku = $this->buku_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('buku/read');
    }
}
