<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table buku di database
    public function read()
    {
        //sql read
        $this->db->select('*');
        $this->db->from('buku');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table buku di database
    public function read_single($id)
    {
        //sql read
        $this->db->select('*');
        $this->db->from('buku');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table buku di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('buku', $input);
    }
}
