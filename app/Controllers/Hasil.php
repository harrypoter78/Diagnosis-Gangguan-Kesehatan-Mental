<?php

namespace App\Controllers;

class Hasil extends BaseController
{
    public function index()
    {
        //Koneksi Database
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "gangguanmental";

        $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
        $tbl_gejala = mysqli_query($koneksi, "SELECT * FROM gejala");
        $tbl_penyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");

        $data_kode_gej = array();
        $data_nama_gej = array();
        while ($row = mysqli_fetch_array($tbl_gejala)) {
            if ($row) {
                $vkodegejala = $row['kode_gejala'];
                $vnamagejala = $row['nama_gejala'];
            }
            $data_kode_gej[] = $vkodegejala;
            $data_nama_gej[] = $vnamagejala;
        }
        // echo $data_kode_gej[32];
        // echo $data_nama_gej[32];

        $data_kode_peny = array();
        $data_nama_peny = array();
        $data_deskripsi = array();
        $data_solusi_obat = array();
        $data_solusi_lain = array();
        while ($row = mysqli_fetch_array($tbl_penyakit)) {
            if ($row) {
                $vkodepenyakit = $row['kode_penyakit'];
                $vnamapenyakit = $row['nama_penyakit'];
                $vdeskripsi = $row['deskripsi'];
                $vsolusi_obat = $row['solusi_obat'];
                $vsolusi_lain = $row['solusi_lain'];
            }
            $data_kode_peny[] = $vkodepenyakit;
            $data_nama_peny[] = $vnamapenyakit;
            $data_deskripsi[] =  $vdeskripsi;
            $data_solusi_obat[] = $vsolusi_obat;
            $data_solusi_lain[] = $vsolusi_lain;
        }


        $varG1 = $varG2 = $varG3 = $varG4 = $varG5 = $varG6 = $varG7 = $varG8 = $varG9 = $varG10
            = $varG11 = $varG12 = $varG13 = $varG14 = $varG15 = $varG16 = $varG17 = $varG18 = $varG19
            = $varG20 = $varG21 = $varG22 = $varG23 = $varG24 = $varG25 = $varG26 = $varG27 = $varG28
            = $varG29 = $varG30 = $varG31 = $varG32 = $varG33 = $varresult = null;

        if (isset($_POST['selectG1'])) {
            $selectOption = $_POST['selectG1'];
            switch ($selectOption) {
                case 'G1':
                    $varG1 = $data_kode_gej[0] . " = " . $data_nama_gej[0];
                    break;
            }
        }

        if (isset($_POST['selectG2'])) {
            $selectOption = $_POST['selectG2'];
            switch ($selectOption) {
                case 'G2':
                    $varG2 = $data_kode_gej[1] . " = " . $data_nama_gej[1];
                    break;
            }
        }
        if (isset($_POST['selectG3'])) {
            $selectOption = $_POST['selectG3'];
            switch ($selectOption) {
                case 'G3':
                    $varG3 = $data_kode_gej[2] . " = " . $data_nama_gej[2];
                    break;
            }
        }

        if (isset($_POST['selectG4'])) {
            $selectOption = $_POST['selectG4'];
            switch ($selectOption) {
                case 'G4':
                    $varG4 = $data_kode_gej[3] . " = " . $data_nama_gej[3];
                    break;
            }
        }

        if (isset($_POST['selectG5'])) {
            $selectOption = $_POST['selectG5'];
            switch ($selectOption) {
                case 'G5':
                    $varG5 = $data_kode_gej[4] . " = " . $data_nama_gej[4];
                    break;
            }
        }

        if (isset($_POST['selectG6'])) {
            $selectOption = $_POST['selectG6'];
            switch ($selectOption) {
                case 'G6':
                    $varG6 = $data_kode_gej[5] . " = " . $data_nama_gej[5];
                    break;
            }
        }

        if (isset($_POST['selectG7'])) {
            $selectOption = $_POST['selectG7'];
            switch ($selectOption) {
                case 'G7':
                    $varG7 = $data_kode_gej[6] . " = " . $data_nama_gej[6];
                    break;
            }
        }

        if (isset($_POST['selectG8'])) {
            $selectOption = $_POST['selectG8'];
            switch ($selectOption) {
                case 'G8':
                    $varG8 = $data_kode_gej[7] . " = " . $data_nama_gej[7];
                    break;
            }
        }

        if (isset($_POST['selectG9'])) {
            $selectOption = $_POST['selectG9'];
            switch ($selectOption) {
                case 'G9':
                    $varG9 = $data_kode_gej[8] . " = " . $data_nama_gej[8];
                    break;
            }
        }

        if (isset($_POST['selectG10'])) {
            $selectOption = $_POST['selectG10'];
            switch ($selectOption) {
                case 'G10':
                    $varG10 = $data_kode_gej[9] . " = " . $data_nama_gej[9];
                    break;
            }
        }

        if (isset($_POST['selectG11'])) {
            $selectOption = $_POST['selectG11'];
            switch ($selectOption) {
                case 'G11':
                    $varG11 = $data_kode_gej[10] . " = " . $data_nama_gej[10];
                    break;
            }
        }

        if (isset($_POST['selectG12'])) {
            $selectOption = $_POST['selectG12'];
            switch ($selectOption) {
                case 'G12':
                    $varG12 = $data_kode_gej[11] . " = " . $data_nama_gej[11];
                    break;
            }
        }

        if (isset($_POST['selectG13'])) {
            $selectOption = $_POST['selectG13'];
            switch ($selectOption) {
                case 'G13':
                    $varG13 = $data_kode_gej[12] . " = " . $data_nama_gej[12];
                    break;
            }
        }

        if (isset($_POST['selectG14'])) {
            $selectOption = $_POST['selectG14'];
            switch ($selectOption) {
                case 'G14':
                    $varG14 = $data_kode_gej[13] . " = " . $data_nama_gej[13];
                    break;
            }
        }

        if (isset($_POST['selectG15'])) {
            $selectOption = $_POST['selectG15'];
            switch ($selectOption) {
                case 'G15':
                    $varG15 = $data_kode_gej[14] . " = " . $data_nama_gej[14];
                    break;
            }
        }

        if (isset($_POST['selectG16'])) {
            $selectOption = $_POST['selectG16'];
            switch ($selectOption) {
                case 'G16':
                    $varG16 = $data_kode_gej[15] . " = " . $data_nama_gej[15];
                    break;
            }
        }

        if (isset($_POST['selectG17'])) {
            $selectOption = $_POST['selectG17'];
            switch ($selectOption) {
                case 'G17':
                    $varG17 = $data_kode_gej[16] . " = " . $data_nama_gej[16];
                    break;
            }
        }

        if (isset($_POST['selectG18'])) {
            $selectOption = $_POST['selectG18'];
            switch ($selectOption) {
                case 'G18':
                    $varG18 = $data_kode_gej[17] . " = " . $data_nama_gej[17];
                    break;
            }
        }

        if (isset($_POST['selectG19'])) {
            $selectOption = $_POST['selectG19'];
            switch ($selectOption) {
                case 'G19':
                    $varG19 = $data_kode_gej[18] . " = " . $data_nama_gej[18];
                    break;
            }
        }

        if (isset($_POST['selectG20'])) {
            $selectOption = $_POST['selectG20'];
            switch ($selectOption) {
                case 'G20':
                    $varG20 = $data_kode_gej[19] . " = " . $data_nama_gej[19];
                    break;
            }
        }

        if (isset($_POST['selectG21'])) {
            $selectOption = $_POST['selectG21'];
            switch ($selectOption) {
                case 'G21':
                    $varG21 = $data_kode_gej[20] . " = " . $data_nama_gej[20];
                    break;
            }
        }

        if (isset($_POST['selectG22'])) {
            $selectOption = $_POST['selectG22'];
            switch ($selectOption) {
                case 'G22':
                    $varG22 = $data_kode_gej[21] . " = " . $data_nama_gej[21];
                    break;
            }
        }

        if (isset($_POST['selectG23'])) {
            $selectOption = $_POST['selectG23'];
            switch ($selectOption) {
                case 'G23':
                    $varG23 = $data_kode_gej[22] . " = " . $data_nama_gej[22];
                    break;
            }
        }

        if (isset($_POST['selectG24'])) {
            $selectOption = $_POST['selectG24'];
            switch ($selectOption) {
                case 'G24':
                    $varG24 = $data_kode_gej[23] . " = " . $data_nama_gej[23];
                    break;
            }
        }

        if (isset($_POST['selectG25'])) {
            $selectOption = $_POST['selectG25'];
            switch ($selectOption) {
                case 'G25':
                    $varG25 = $data_kode_gej[24] . " = " . $data_nama_gej[24];
                    break;
            }
        }

        if (isset($_POST['selectG26'])) {
            $selectOption = $_POST['selectG26'];
            switch ($selectOption) {
                case 'G26':
                    $varG26 = $data_kode_gej[25] . " = " . $data_nama_gej[25];
                    break;
            }
        }

        if (isset($_POST['selectG27'])) {
            $selectOption = $_POST['selectG27'];
            switch ($selectOption) {
                case 'G27':
                    $varG27 = $data_kode_gej[26] . " = " . $data_nama_gej[26];
                    break;
            }
        }

        if (isset($_POST['selectG28'])) {
            $selectOption = $_POST['selectG28'];
            switch ($selectOption) {
                case 'G28':
                    $varG28 = $data_kode_gej[27] . " = " . $data_nama_gej[27];
                    break;
            }
        }

        if (isset($_POST['selectG29'])) {
            $selectOption = $_POST['selectG29'];
            switch ($selectOption) {
                case 'G29':
                    $varG29 = $data_kode_gej[28] . " = " . $data_nama_gej[28];
                    break;
            }
        }

        if (isset($_POST['selectG30'])) {
            $selectOption = $_POST['selectG30'];
            switch ($selectOption) {
                case 'G30':
                    $varG30 = $data_kode_gej[29] . " = " . $data_nama_gej[29];
                    break;
            }
        }

        if (isset($_POST['selectG31'])) {
            $selectOption = $_POST['selectG31'];
            switch ($selectOption) {
                case 'G31':
                    $varG31 = $data_kode_gej[30] . " = " . $data_nama_gej[30];
                    break;
            }
        }

        if (isset($_POST['selectG32'])) {
            $selectOption = $_POST['selectG32'];
            switch ($selectOption) {
                case 'G32':
                    $varG32 = $data_kode_gej[31] . " = " . $data_nama_gej[31];
                    break;
            }
        }

        if (isset($_POST['selectG33'])) {
            $selectOption = $_POST['selectG33'];
            switch ($selectOption) {
                case 'G33':
                    $varG33 = $data_kode_gej[32] . " = " . $data_nama_gej[32];
                    break;
            }
        }

        #Logika Forward Chaining
        $R1 = $varG1 && $varG2 && empty($varG3) && empty($varG4) && $varG5 && empty($varG6) && $varG7 && $varG8 && empty($varG9) && empty($varG10)
            && empty($varG11) && $varG12 && empty($varG13) && empty($varG14) && empty($varG15) && empty($varG16) && empty($varG17) && empty($varG18) && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && empty($varG23) && empty($varG24) && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R2 = $varG1 && empty($varG2) && empty($varG3) && $varG4 && empty($varG5) && $varG6 && empty($varG7) && empty($varG8) && $varG9 && $varG10
            && empty($varG11) && empty($varG12) && $varG13 && empty($varG14) && empty($varG15) && $varG16 && empty($varG17) && empty($varG18) && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && empty($varG23) && empty($varG24) && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R3 = $varG1 && empty($varG2) && empty($varG3) && $varG4 && empty($varG5) && empty($varG6) && empty($varG7) && empty($varG8) && empty($varG9) && empty($varG10)
            && $varG11 && empty($varG12) && empty($varG13) && $varG14 && empty($varG15) && empty($varG16) && empty($varG17) && empty($varG18) && empty($varG19) && $varG20
            && empty($varG21) && empty($varG22) && empty($varG23) && empty($varG24) && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R4 = $varG1 && empty($varG2) && empty($varG3) && empty($varG4) && empty($varG5) && empty($varG6) && empty($varG7) && empty($varG8) && $varG9 && empty($varG10)
            && empty($varG11) && empty($varG12) && $varG13 && empty($varG14) && empty($varG15) && empty($varG16) && empty($varG17) && $varG18 && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && $varG23 && empty($varG24) && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R5 = empty($varG1) && $varG2 && empty($varG3) && empty($varG4) && empty($varG5) && empty($varG6) && $varG7 && empty($varG8) && $varG9 && empty($varG10)
            && empty($varG11) && $varG12 && empty($varG13) && empty($varG14) && $varG15 && empty($varG16) && empty($varG17) && $varG18 && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && $varG23 && $varG24 && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R6 = empty($varG1) && empty($varG2) && $varG3 && empty($varG4) && empty($varG5) && empty($varG6) && empty($varG7) && empty($varG8) && empty($varG9) && empty($varG10)
            && empty($varG11) && $varG12 && empty($varG13) && $varG14 && empty($varG15) && empty($varG16) && $varG17 && empty($varG18) && $varG19 && empty($varG20)
            && $varG21 && $varG22 && empty($varG23) && empty($varG24) && empty($varG25) && empty($varG26) && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && empty($varG32) && empty($varG33);

        $R7 = empty($varG1) && empty($varG2) && empty($varG3) && empty($varG4) && empty($varG5) && empty($varG6) && empty($varG7) && empty($varG8) && $varG9 && empty($varG10)
            && empty($varG11) && empty($varG12) && $varG13 && empty($varG14) && empty($varG15) && empty($varG16) && empty($varG17) && $varG18 && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && empty($varG23) && empty($varG24) && $varG25 && $varG26 && empty($varG27) && empty($varG28) && empty($varG29) && empty($varG30)
            && empty($varG31) && $varG32 && $varG33;

        $R8 = empty($varG1) && empty($varG2) && empty($varG3) && empty($varG4) && empty($varG5) && empty($varG6) && empty($varG7) && $varG8 && empty($varG9) && empty($varG10)
            && empty($varG11) && empty($varG12) && empty($varG13) && empty($varG14) && empty($varG15) && empty($varG16) && empty($varG17) && empty($varG18) && empty($varG19) && empty($varG20)
            && empty($varG21) && empty($varG22) && empty($varG23) && empty($varG24) && empty($varG25) && empty($varG26) && $varG27 && $varG28 && $varG29 && $varG30
            && $varG31 && empty($varG32) && empty($varG33);

        //Aturan 1
        if ($R1) {
            // 'Skizofrenia';
            $varresult = $data_nama_peny[0];
            $vardeskripsi = $data_deskripsi[0];
            $varobat = $data_solusi_obat[0];
            $varlain = $data_solusi_lain[0];
        }
        //Aturan 2
        elseif ($R2) {
            // 'Post Traumatic Stress Disorder (PTSD)';
            $varresult = $data_nama_peny[1];
            $vardeskripsi = $data_deskripsi[1];
            $varobat = $data_solusi_obat[1];
            $varlain = $data_solusi_lain[1];
        }
        //Aturan 3
        elseif ($R3) {
            // 'Depression';
            $varresult = $data_nama_peny[2];
            $vardeskripsi = $data_deskripsi[2];
            $varobat = $data_solusi_obat[2];
            $varlain = $data_solusi_lain[2];
        }
        //Aturan 4
        elseif ($R4) {
            // 'Anxiety Disorder';
            $varresult = $data_nama_peny[7];
            $vardeskripsi = $data_deskripsi[7];
            $varobat = $data_solusi_obat[7];
            $varlain = $data_solusi_lain[7];
        }
        //Aturan 5
        elseif ($R5) {
            //'Paranoria';
            $varresult = $data_nama_peny[4];
            $vardeskripsi = $data_deskripsi[4];
            $varobat = $data_solusi_obat[4];
            $varlain = $data_solusi_lain[4];
        }
        //Aturan 6
        elseif ($R6) {
            // 'Bipolar Disorder';
            $varresult = $data_nama_peny[3];
            $vardeskripsi = $data_deskripsi[3];
            $varobat = $data_solusi_obat[3];
            $varlain = $data_solusi_lain[3];
        }
        //Aturan 7
        elseif ($R7) {
            //'Eating Disorder';
            $varresult = $data_nama_peny[5];
            $vardeskripsi = $data_deskripsi[5];
            $varobat = $data_solusi_obat[5];
            $varlain = $data_solusi_lain[5];
        }
        //Aturan 8
        elseif ($R8) {
            // 'Obsessive Compulsive Disorder (OCD)';
            $varresult = $data_nama_peny[6];
            $vardeskripsi = $data_deskripsi[6];
            $varobat = $data_solusi_obat[6];
            $varlain = $data_solusi_lain[6];
        }
        //Penyakit Tidak Diketahui
        else {
            $varresult = 'Penyakit Tidak Diketahui';
            $vardeskripsi = '';
            $varobat = '';
            $varlain = '';
        }

        $date = date('Y-m-d');
        session_start();
        $tnama = $_SESSION['tnama'];
        if (isset($_POST['submit'])) {
            mysqli_query($koneksi, "INSERT INTO riwayat (nama_pasien, nama_penyakit, tanggal) VALUES ('$tnama', '$varresult', '$date')");
        }


        $data = [
            'title' => 'C3 - Hasil Diagnosis',
            'varG1' => $varG1,
            'varG2' => $varG2,
            'varG3' => $varG3,
            'varG4' => $varG4,
            'varG5' => $varG5,
            'varG6' => $varG6,
            'varG7' => $varG7,
            'varG8' => $varG8,
            'varG9' => $varG9,
            'varG10' => $varG10,
            'varG11' => $varG11,
            'varG12' => $varG12,
            'varG13' => $varG13,
            'varG14' => $varG14,
            'varG15' => $varG15,
            'varG16' => $varG16,
            'varG17' => $varG17,
            'varG18' => $varG18,
            'varG19' => $varG19,
            'varG20' => $varG20,
            'varG21' => $varG21,
            'varG22' => $varG22,
            'varG23' => $varG23,
            'varG24' => $varG24,
            'varG25' => $varG25,
            'varG26' => $varG26,
            'varG27' => $varG27,
            'varG28' => $varG28,
            'varG29' => $varG29,
            'varG30' => $varG30,
            'varG31' => $varG31,
            'varG32' => $varG32,
            'varG33' => $varG33,
            'varresult' => $varresult,
            'vardeskripsi' => $vardeskripsi,
            'varobat' => $varobat,
            'varlain' => $varlain
        ];


        return view('pages/hasil', $data);
    }

    //--------------------------------------------------------------------

}
