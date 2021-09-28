<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edisibuku_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table edisi_buku di database
    public function read($id_buku = '')
    {

        //sql read
        $this->db->select('edisi_buku.*');
        $this->db->select('buku.judul AS judul_buku');
        $this->db->from('edisi_buku');
        $this->db->join('buku', 'edisi_buku.id_buku = buku.id');

        //filter data sesuai id yang dikirim dari controller
        if ($id_buku != '') {
            $this->db->where('edisi_buku.id_buku', $id_buku);
        }

        $this->db->order_by('edisi_buku.id_buku ASC, edisi_buku.nama_edisi ASC');

        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table edisi_buku di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('edisi_buku');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table edisi_buku di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('edisi_buku', $input);
    }

    //function update berfungsi merubah data ke table edisi_buku di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('edisi_buku', $input);
    }

    //function delete berfungsi menghapus data dari table edisi_buku di database
    public function delete($id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('id', $id);
        return $this->db->delete('edisi_buku');
    }
}
