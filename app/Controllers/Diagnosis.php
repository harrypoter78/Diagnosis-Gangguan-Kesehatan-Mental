<?php

namespace App\Controllers;

class Diagnosis extends BaseController
{
    public function index()
    {
        session_start();
        if (isset($_POST['tnama'])) {
            $tnama = $_POST['tnama'];
        }
        $_SESSION['tnama'] = $tnama;


        $data = [
            'title' => 'C3 - Diagnosis'
        ];
        return view('pages/diagnosis', $data);
    }

    //--------------------------------------------------------------------

}
