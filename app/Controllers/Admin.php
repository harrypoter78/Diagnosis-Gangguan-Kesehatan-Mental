<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RiwayatModel;
use App\Models\RuleModel;

class Admin extends BaseController
{
    protected $gejalaModel;
    protected $penyakitModel;
    protected $riwayatModel;
    protected $ruleModel;
    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
        $this->penyakitModel = new PenyakitModel();
        $this->riwayatModel = new RiwayatModel();
        $this->ruleModel = new RuleModel();
    }

    public function index()
    {
        //Koneksi Database
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "gangguanmental";

        $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
        $tbl_admin = mysqli_query($koneksi, "SELECT * FROM admin");

        $data_user = array();
        $data_pass = array();
        while ($row = mysqli_fetch_array($tbl_admin)) {
            if ($row) {
                $vadmin = $row['username'];
                $vpass = $row['password'];
            }
            $data_user[] = $vadmin;
            $data_pass[] = $vpass;
        }

        $data = [
            'title' => 'C3 - Halaman Admin'
        ];

        if (isset($_POST['login'])) {
            $user = $_POST['tusername'];
            $pass = $_POST['tpassword'];
            if (($user == $data_user[0]) && ($pass == $data_pass[0])) {
                return view('pages/admin/halamanadmin', $data);
            } else {
                echo "<script>
                		alert('Login Gagal');
                     </script>";
                // return view('pages/login', $data);
                return redirect()->to('/login');
            }
        }
    }

    //DATA GEJALA
    public function datagejala()
    {

        $data = [
            'title' => 'C3 - Data Gejala',
            'datagejala' => $this->gejalaModel->getGejala()

        ];
        return view('pages/admin/datagejala', $data);
    }

    public function ubahgejala($id_gejala)
    {
        $data = [
            'title' => 'C3 - Ubah Data',
            'datagejala' => $this->gejalaModel->getGejala($id_gejala)
        ];
        return view('pages/admin/crud/ubahgejala', $data);
    }

    public function hapusgejala($id_gejala)
    {
        $this->gejalaModel->delete($id_gejala);
        session()->setFlashdata('pemberitahuan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datagejala');
    }

    public function updategejala($id_gejala)
    {
        $this->gejalaModel->save([
            'id_gejala' => $id_gejala,
            'nama_gejala' => $this->request->getVar('tnama'),
            'kode_gejala' => $this->request->getVar('tkode')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datagejala');
    }

    public function tambahgejala()
    {
        $data = [
            'title' => 'C3 - Tambah Data',
        ];
        return view('pages/admin/crud/tambahgejala', $data);
    }

    public function savegejala()
    {
        $this->gejalaModel->save([
            'nama_gejala' => $this->request->getVar('tnama'),
            'kode_gejala' => $this->request->getVar('tkode')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/admin/datagejala');
    }

    //DATA PENYAKIT
    public function datapenyakit()
    {

        $data = [
            'title' => 'C3 - Data Penyakit',
            'datapenyakit' => $this->penyakitModel->getPenyakit()

        ];
        return view('pages/admin/datapenyakit', $data);
    }

    public function ubahpenyakit($id_penyakit)
    {
        $data = [
            'title' => 'C3 - Ubah Data',
            'datapenyakit' => $this->penyakitModel->getPenyakit($id_penyakit)
        ];
        return view('pages/admin/crud/ubahpenyakit', $data);
    }

    public function hapuspenyakit($id_penyakit)
    {
        $this->penyakitModel->delete($id_penyakit);
        session()->setFlashdata('pemberitahuan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datapenyakit');
    }

    public function updatepenyakit($id_penyakit)
    {
        $this->penyakitModel->save([
            'id_penyakit' => $id_penyakit,
            'nama_penyakit' => $this->request->getVar('tnama'),
            'kode_penyakit' => $this->request->getVar('tkode'),
            'deskripsi' => $this->request->getVar('tdeskripsi'),
            'solusi_obat' => $this->request->getVar('tobat'),
            'solusi_lain' => $this->request->getVar('tlain')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datapenyakit');
    }

    public function tambahpenyakit()
    {
        $data = [
            'title' => 'C3 - Tambah Data',
        ];
        return view('pages/admin/crud/tambahpenyakit', $data);
    }

    public function savepenyakit()
    {
        $this->penyakitModel->save([
            'nama_penyakit' => $this->request->getVar('tnama'),
            'kode_penyakit' => $this->request->getVar('tkode'),
            'deskripsi' => $this->request->getVar('tdeskripsi'),
            'solusi_obat' => $this->request->getVar('tobat'),
            'solusi_lain' => $this->request->getVar('tlain')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/admin/datapenyakit');
    }

    //DATA RIWAYAT
    public function datariwayat()
    {

        $data = [
            'title' => 'C3 - Data Riwayat Diagnosis',
            'datariwayat' => $this->riwayatModel->getRiwayat()

        ];
        return view('pages/admin/datariwayat', $data);
    }

    public function ubahriwayat($id_riwayat)
    {
        $data = [
            'title' => 'C3 - Ubah Data',
            'datariwayat' => $this->riwayatModel->getRiwayat($id_riwayat)
        ];
        return view('pages/admin/crud/ubahriwayat', $data);
    }

    public function hapusriwayat($id_riwayat)
    {
        $this->riwayatModel->delete($id_riwayat);
        session()->setFlashdata('pemberitahuan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datariwayat');
    }

    public function updateriwayat($id_riwayat)
    {
        $this->riwayatModel->save([
            'id_riwayat' => $id_riwayat,
            'nama_pasien' => $this->request->getVar('tpasien'),
            'nama_penyakit' => $this->request->getVar('tpenyakit'),
            'tanggal' => $this->request->getVar('ttanggal')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datariwayat');
    }

    public function tambahriwayat()
    {
        $data = [
            'title' => 'C3 - Tambah Data',
        ];
        return view('pages/admin/crud/tambahriwayat', $data);
    }

    public function saveriwayat()
    {
        $this->riwayatModel->save([
            'nama_pasien' => $this->request->getVar('tpasien'),
            'nama_penyakit' => $this->request->getVar('tpenyakit'),
            'tanggal' => $this->request->getVar('ttanggal')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/admin/datariwayat');
    }


    //DATA RULE
    public function datarule()
    {

        $data = [
            'title' => 'C3 - Data Rule Diagnosis',
            'datarule' => $this->ruleModel->getRule()

        ];
        return view('pages/admin/datarule', $data);
    }

    public function ubahrule($id_rule)
    {
        $data = [
            'title' => 'C3 - Ubah Data',
            'datarule' => $this->ruleModel->getRule($id_rule)
        ];
        return view('pages/admin/crud/ubahrule', $data);
    }

    public function hapusrule($id_rule)
    {
        $this->ruleModel->delete($id_rule);
        session()->setFlashdata('pemberitahuan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datarule');
    }

    public function updaterule($id_rule)
    {
        $this->ruleModel->save([
            'id_rule' => $id_rule,
            'kode_rule' => $this->request->getVar('trule'),
            'kode_penyakit' => $this->request->getVar('tpenyakit'),
            'kode_gejala' => $this->request->getVar('tgejala')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datarule');
    }

    public function tambahrule()
    {
        $data = [
            'title' => 'C3 - Tambah Data',
        ];
        return view('pages/admin/crud/tambahrule', $data);
    }

    public function saverule()
    {
        $this->ruleModel->save([
            'kode_rule' => $this->request->getVar('trule'),
            'kode_penyakit' => $this->request->getVar('tpenyakit'),
            'kode_gejala' => $this->request->getVar('tgejala')
        ]);

        session()->setFlashdata('pemberitahuan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/admin/datarule');
    }

    //--------------------------------------------------------------------

}
