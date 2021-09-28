<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edisibuku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model(array('edisibuku_model', 'buku_model'));
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read pada edisibuku model
        //function read berfungsi mengambil/read data dari table edisibuku di database
        $data_edisibuku = $this->edisibuku_model->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Daftar Edisi Buku',

            //data edisibuku dikirim ke view
            'data_edisibuku' => $data_edisibuku
        );

        //memanggil file view
        $this->load->view('edisibuku_read', $output);
    }

    public function insert()
    {
        //mengambil daftar buku dari table buku
        $data_buku = $this->buku_model->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Tambah edisibuku',

            //mengirim daftar buku ke view
            'data_buku' => $data_buku,
        );

        //memanggil file view
        $this->load->view('edisibuku_insert', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $id_buku = $this->input->post('id_buku');
        $nama_edisi = $this->input->post('nama_edisi');
        $jumlah_cetak = $this->input->post('jumlah_cetak');

        //mengirim data ke model
        $input = array(
            //format : nama_edisi field/kolom table => data input dari view
            'id_buku' => $id_buku,
            'nama_edisi' => $nama_edisi,
            'jumlah_cetak' => $jumlah_cetak,
        );

        //memanggil function insert pada edisibuku model
        //function insert berfungsi menyimpan/create data ke table edisibuku di database
        $data_edisibuku = $this->edisibuku_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('edisibuku/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table edisibuku sesuai id yg dipilih
        $data_edisibuku_single = $this->edisibuku_model->read_single($id);

        //mengambil daftar buku dari table buku
        $data_buku = $this->buku_model->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Ubah Edisi Buku',

            //mengirim data edisibuku yang dipilih ke view
            'data_edisibuku_single' => $data_edisibuku_single,

            //mengirim daftar buku ke view
            'data_buku' => $data_buku,
        );

        //memanggil file view
        $this->load->view('edisibuku_update', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $id_buku = $this->input->post('id_buku');
        $nama_edisi = $this->input->post('nama_edisi');
        $jumlah_cetak = $this->input->post('jumlah_cetak');

        //mengirim data ke model
        $input = array(
            //format : nama_edisi field/kolom table => data input dari view
            'id_buku' => $id_buku,
            'nama_edisi' => $nama_edisi,
            'jumlah_cetak' => $jumlah_cetak,
        );

        //memanggil function update pada edisibuku model
        //function update berfungsi merubah data ke table edisibuku di database
        $data_edisibuku = $this->edisibuku_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('edisibuku/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada edisibuku model
        $data_edisibuku = $this->edisibuku_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('edisibuku/read');
    }
}
