<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function mamam($jmlData = 18)
    
    {
       
        if($jmlData >=15){
            for ($i=0; $i < $jmlData ; $i++){
                echo "Orang Pintar Bayar Pajak ".$i."<br>";
            }
        }else{
        echo "data kureng";
        }
    }
}