<?php

namespace App\Controllers;

class HalamanUtama extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'C3 - Menu Utama'
        ];
        return view('pages/halamanutama', $data);
    }

    public function isidata()
    {
        $data = [
            'title' => 'C3 - Mengisi Data Pribadi'
        ];
        return view('pages/isidata', $data);
    }

    public function daftargangguan()
    {
        $data = [
            'title' => 'C3 - Daftar Gangguan Kesehatan Mental'
        ];
        return view('pages/daftargangguan', $data);
    }

    public function skizofrenia()
    {
        $data = [
            'title' => 'C3 - Gangguan Skizofrenia'
        ];
        return view('pages/pagesgangguan/skizofrenia', $data);
    }

    public function ptsd()
    {
        $data = [
            'title' => 'C3 - Gangguan PTSD'
        ];
        return view('pages/pagesgangguan/ptsd', $data);
    }

    public function depression()
    {
        $data = [
            'title' => 'C3 - Gangguan Depression'
        ];
        return view('pages/pagesgangguan/depression', $data);
    }

    public function bipolar()
    {
        $data = [
            'title' => 'C3 - Gangguan Bipolar Disorder'
        ];
        return view('pages/pagesgangguan/bipolar', $data);
    }

    public function paranoia()
    {
        $data = [
            'title' => 'C3 - Gangguan Paranoia'
        ];
        return view('pages/pagesgangguan/paranoia', $data);
    }

    public function eating()
    {
        $data = [
            'title' => 'C3 - Gangguan Eating Disorder'
        ];
        return view('pages/pagesgangguan/eating', $data);
    }

    public function ocd()
    {
        $data = [
            'title' => 'C3 - Gangguan OCD'
        ];
        return view('pages/pagesgangguan/ocd', $data);
    }

    public function anxiety()
    {
        $data = [
            'title' => 'C3 - Gangguan Anxiety Disorder'
        ];
        return view('pages/pagesgangguan/anxiety', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'C3 - Login'
        ];
        return view('pages/login', $data);
    }

    //--------------------------------------------------------------------

}
