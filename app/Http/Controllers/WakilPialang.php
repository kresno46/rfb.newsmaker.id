<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk_model;
use PDF;

class WakilPialang extends Controller
{
    // Legalitas Bisnis
    public function legalitasbisnis() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Legalitas Bisnis',
                        'deskripsi' => 'Legalitas Bisnis '.$site->namaweb,
                        'keywords'  => 'Legalitas Bisnis '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/legalitasbisnis'
                    );
        return view('layout/wrapper',$data);
    }    

    // Fibonacci
    public function fibonacci() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Pivot & Fibonacci',
                        'deskripsi' => 'Fibonacci '.$site->namaweb,
                        'keywords'  => 'Fibonacci '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/fibonacci'
                    );
        return view('layout/wrapper',$data);
    }

    // Pivot
    public function pivot() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Pivot & Fibonacci',
                        'deskripsi' => 'Pivot '.$site->namaweb,
                        'keywords'  => 'Pivot '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/pivot'
                    );
        return view('layout/wrapper',$data);
    }

    // Berita1
    public function berita1() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Berita1',
                        'deskripsi' => 'Berita1 '.$site->namaweb,
                        'keywords'  => 'Berita1 '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/berita1'
                    );
        return view('layout/wrapper',$data);
    }

    // News
    public function news() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'News',
                        'deskripsi' => 'News '.$site->namaweb,
                        'keywords'  => 'News '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/news'
                    );
        return view('layout/wrapper',$data);
    }

    // Petunjuk Transaksi
    public function petunjuk_transaksi() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Petunjuk Transaksi',
                        'deskripsi' => 'Petunjuk Transaksi '.$site->namaweb,
                        'keywords'  => 'Petunjuk Transaksi '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/petunjuk_transaksi'
                    );
        return view('layout/wrapper',$data);
    }

    // Prosedur Penarikan
    public function prosedur_penarikan() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Prosedur Penarikan',
                        'deskripsi' => 'Prosedur Penarikan '.$site->namaweb,
                        'keywords'  => 'Prosedur Penarikan '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/prosedur_penarikan'
                    );
        return view('layout/wrapper',$data);
    }

    // Prosedur Registrasi Online
    public function prosedur_registrasi_online() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Prosedur Registrasi Online',
                        'deskripsi' => 'Prosedur Registrasi Online '.$site->namaweb,
                        'keywords'  => 'Prosedur Registrasi Online '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/prosedur_registrasi_online'
                    );
        return view('layout/wrapper',$data);
    }

    // Historical Data
    public function historical_data() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Historical Data',
                        'deskripsi' => 'Historical Data '.$site->namaweb,
                        'keywords'  => 'Historical Data '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/historical_data'
                    );
        return view('layout/wrapper',$data);
    }


    // Economic Calendar
    public function economic_calendar() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'Economic Calendar',
                        'deskripsi' => 'Economic Calendar '.$site->namaweb,
                        'keywords'  => 'Economic Calendar '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/economic_calendar'
                    );
        return view('layout/wrapper',$data);
    }

    // Axa Tower
    public function axa_tower_jakarta() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - AXA Tower Jakarta',
                        'deskripsi' => 'AXA Tower '.$site->namaweb,
                        'keywords'  => 'AXA Tower '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/axa_tower_jakarta'
                    );
        return view('layout/wrapper',$data);
    }

    // Medan
    public function medan() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Medan',
                        'deskripsi' => 'Medan '.$site->namaweb,
                        'keywords'  => 'Medan '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/medan'
                    );
        return view('layout/wrapper',$data);
    }

    // Solo
    public function solo() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Solo',
                        'deskripsi' => 'Solo '.$site->namaweb,
                        'keywords'  => 'Solo '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/solo'
                    );
        return view('layout/wrapper',$data);
    }

    // Balikpapan
    public function balikpapan() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Balikpapan',
                        'deskripsi' => 'Balikpapan '.$site->namaweb,
                        'keywords'  => 'Balikpapan '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/balikpapan'
                    );
        return view('layout/wrapper',$data);
    }

    // Palembang
    public function palembang() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Palembang',
                        'deskripsi' => 'Palembang '.$site->namaweb,
                        'keywords'  => 'Palembang '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/palembang'
                    );
        return view('layout/wrapper',$data);
    }

    // Surabaya Ciputra
    public function surabaya_ciputra() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Surabaya Ciputra',
                        'deskripsi' => 'Surabaya Ciputra '.$site->namaweb,
                        'keywords'  => 'Surabaya Ciputra '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/surabaya_ciputra'
                    );
        return view('layout/wrapper',$data);
    }

    // Bandung
    public function bandung() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Bandung',
                        'deskripsi' => 'Bandung '.$site->namaweb,
                        'keywords'  => 'Bandung '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/bandung'
                    );
        return view('layout/wrapper',$data);
    }

    // Pekanbaru
    public function pekanbaru() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Pekanbaru',
                        'deskripsi' => 'Pekanbaru '.$site->namaweb,
                        'keywords'  => 'Pekanbaru '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/pekanbaru'
                    );
        return view('layout/wrapper',$data);
    }

    // Surabaya Pakuwon
    public function surabaya_pakuwon() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Surabaya Pakuwon',
                        'deskripsi' => 'Surabaya Pakuwon '.$site->namaweb,
                        'keywords'  => 'Surabaya Pakuwon '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/surabaya_pakuwon'
                    );
        return view('layout/wrapper',$data);
    }

    // Dbs Tower
    public function dbs_tower_jakarta() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - DBS Tower Jakarta',
                        'deskripsi' => 'DBS Tower '.$site->namaweb,
                        'keywords'  => 'DBS Tower '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/dbs_tower_jakarta'
                    );
        return view('layout/wrapper',$data);
    }

    // Semarang
    public function semarang() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Semarang',
                        'deskripsi' => 'Semarang '.$site->namaweb,
                        'keywords'  => 'Semarang '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/semarang'
                    );
        return view('layout/wrapper',$data);
    }

    // Yogyakarta
    public function Yogyakarta() 
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(  'title'     => 'PT Rifan Financindo Berjangka - Yogyakarta',
                        'deskripsi' => 'Yogyakarta '.$site->namaweb,
                        'keywords'  => 'Yogyakarta '.$site->namaweb,
                        'site'      => $site,
                        'produk'    => $produk,
                        'content'   => 'home/yogyakarta'
                    );
        return view('layout/wrapper',$data);
    }
}