<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kampus extends CI_Controller
{
    public function index()
    {
        return $this->fasilkom();
    }
    public function fasilkom()
    {
        echo "Fasilkom";
        echo "<br>Hafief Maulana Aziz - 41519010163";
    }

    public function fikom()
    {
        echo "Fikom";
        echo "<br>Hafief Maulana Aziz - 41519010163";
    }

    public function fdsk()
    {
        echo "FDSK";
        echo "<br>Hafief Maulana Aziz - 41519010163";
    }
}
