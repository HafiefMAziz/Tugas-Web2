<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parameter extends CI_Controller
{

    public function index()
    {
        $this->get_request();
    }

    public function get_request()
    {
        //mengirim data ke view
        $output = array(
            'judul' => 'Parameter Get Request',
            'link' => array(
                'berhenti' => 'red',
                'pelan' => 'yellow',
                'jalan' => 'green'
            )
        );

        //memanggil file view
        $this->load->view('parameter_get_request', $output);
    }

    public function get_response()
    {
        //menangkap data url
        // uri->segmen adalah mengambil apapun url setelah segmen ke(parameternya)
        $tanda = $this->uri->segment(3);
        $warna = $this->uri->segment(4);

        //mengirim data ke view
        $output = array(
            'judul' => 'Parameter Get Response',
            'tanda' => $tanda,
            'warna' => $warna
        );

        //memanggil file view
        $this->load->view('parameter_get_response', $output);
    }

    // public function post_request()
    // {
    //     //mengirim data ke view
    //     $output = array(
    //         'judul' => 'Parameter Post Request'
    //     );

    //     //memanggil file view
    //     $this->load->view('parameter_post_request', $output);
    // }

    public function post_request()
    {
        $output = array(
            'judul' => 'Parameter Post Request'
        );
        $this->load->view('parameter_post_request', $output);
    }

    // public function post_response()
    // {
    //     //menangkap data input dari view
    //     $nama = $this->input->post('nama');
    //     $umur = $this->input->post('umur');

    //     //mengirim data ke view
    //     $output = array(
    //         'judul' => 'Parameter Post Response',
    //         'post' => array(
    //             'nama' => $nama,
    //             'umur' => $umur,
    //         )
    //     );

    //     //memanggil file view
    //     $this->load->view('parameter_post_response', $output);
    // }

    public function post_response()
    {
        //menangkap data input dari view
        $nama = $this->input->post('nama');
        $umur = $this->input->post('umur');
        $gender = $this->input->post('gender');

        // Kondisi Umur

        if ($umur >= 0 && $umur <= 5) {
            $kategori_umur = 'Balita';
        } else if ($umur >= 6 && $umur < 12) {
            $kategori_umur = 'Anak';
        } else if ($umur >= 12 && $umur < 22) {
            $kategori_umur = 'Remaja';
        } else if ($umur >= 22 && $umur < 50) {
            $kategori_umur = 'Dewasa';
        } else if ($umur >= 50 && $umur <= 100) {
            $kategori_umur = 'Lansia';
        } else {
            $kategori_umur = 'diatas 100 tahun';
        }

        //mengirim data ke view
        $output = array(
            'judul' => 'Parameter Post Response',
            'post' => array(
                'nama' => $nama,
                'umur' => $umur,
                'kategori_umur' => $kategori_umur,
                'gender' => $gender
            )
        );

        //memanggil file view
        $this->load->view('parameter_post_response', $output);
    }
}
