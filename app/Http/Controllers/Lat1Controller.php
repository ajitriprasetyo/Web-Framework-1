<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index()
    {
        $data["nama"] = "Aji Tri Prasetyo";
        $data["asal"] = "Purwokerto";
        return view('v_latihan1', $data);
    }

    public function method2()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Aji Tri Prasetyo", "asal" => "Purwokerto"),
            array("nama" => "Justin Hubner", "asal" => "Cilacap"),
            array("nama" => "Ole Romeny", "asal" => "Wonogiri")
        );
        return view('v_latihan2', $data);
    }
}
