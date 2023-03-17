<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;

class Data extends BaseController
{
    public function __construct()
    {
        $this->mahasiswa = new MData;
    }

    public function index()
    {
        $data = $this->mahasiswa->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view('V_showData',$array);
    }
    public function insertData()
    {
        return view('V_insertData');
    }
    public function saveData()
    {
        $data =[
            'nim' => $this->request->getVar('nim'),
            'nama'=> $this->request->getVar('nama'),
            'fakultas' => $this->request->getVar('fakultas'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $insert = $this->mahasiswa->saveData($data);
        return redirect()->to('Data');

    }
    
    public function editData ($id)
    {
        $selectdata = $this->mahasiswa->getSelectData($id);
        $array = [
            'data' =>$selectdata,
        ];
        return view('V_editData',$array);
    }
    public function saveEditData($id)
    {
        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama'=> $this->request->getVar('nama'),
            'fakultas' => $this->request->getVar('fakultas'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $update = $this->mahasiswa->saveEditData($data,$id);
        return redirect()->to('Data');  
    }
    public function hapusData($id)
    {
        $deletedata = $this->mahasiswa->hapusData($id);
        return redirect()->to('Data');
    }   

}