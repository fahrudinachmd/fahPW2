<?php

namespace App\Controllers;

class page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "halaman term of service";
    }
    public function biodata()
    {
        echo "nama : Fahrudin Achmad";
        echo "<br>Alamat : erseven, Mojowarno, jombang<br>";
        echo "ttl : jombang, 01 Oktober 2004";
        echo "<br>jenis kelamin : laki-laki<br>";
        echo "no hp : 085879234562";
    }
}