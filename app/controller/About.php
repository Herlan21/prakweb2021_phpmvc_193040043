<?php

class About {

    public function index($nama = 'Herlan', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo Nama saya $nama, Saya adalah seorang $pekerjaan";
    
    }
    public function page()
    {
        echo 'About/page';
    }
}