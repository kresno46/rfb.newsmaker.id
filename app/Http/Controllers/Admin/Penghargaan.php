<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Penghargaan_model;

class Penghargaan extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$Penghargaan = DB::table('Penghargaan')
                    ->join('kategori_Penghargaan', 'kategori_Penghargaan.id_kategori_Penghargaan', '=', 'Penghargaan.id_kategori_Penghargaan','LEFT')
                    ->select('Penghargaan.*', 'kategori_Penghargaan.nama_kategori_Penghargaan', 'kategori_Penghargaan.slug_kategori_Penghargaan')
                    ->orderBy('Penghargaan.id_Penghargaan','DESC')
                    ->paginate(20);
		$kategori_Penghargaan 	= DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

		$data = array(  'title'				=> 'Data Penghargaan',
						'Penghargaan'			=> $Penghargaan,
						'kategori_Penghargaan'	=> $kategori_Penghargaan,
                        'content'			=> 'admin/Penghargaan/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myPenghargaan           = new Penghargaan_model();
        $keywords           = $request->keywords;
        $Penghargaan             = $myPenghargaan->cari($keywords);
        $kategori_Penghargaan    = DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Penghargaan',
                        'Penghargaan'            => $Penghargaan,
                        'kategori_Penghargaan'   => $kategori_Penghargaan,
                        'content'           => 'admin/Penghargaan/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_Penghargaannya       = $request->id_Penghargaan;
            for($i=0; $i < sizeof($id_Penghargaannya);$i++) {
                DB::table('Penghargaan')->where('id_Penghargaan',$id_Penghargaannya[$i])->delete();
            }
            return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['draft'])) {
            $id_Penghargaannya       = $request->id_Penghargaan;
            for($i=0; $i < sizeof($id_Penghargaannya);$i++) {
                DB::table('Penghargaan')->where('id_Penghargaan',$id_Penghargaannya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_Penghargaan' => 'Draft'
                    ]);
            }
            return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah diubah menjadi Draft']);
        // PROSES SETTING PUBLISH
        }elseif(isset($_POST['publish'])) {
            $id_Penghargaannya       = $request->id_Penghargaan;
            for($i=0; $i < sizeof($id_Penghargaannya);$i++) {
                DB::table('Penghargaan')->where('id_Penghargaan',$id_Penghargaannya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_Penghargaan' => 'Publish'
                    ]);
            }
            return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah diubah menjadi Publish']);
        }elseif(isset($_POST['update'])) {
            $id_Penghargaannya       = $request->id_Penghargaan;
            for($i=0; $i < sizeof($id_Penghargaannya);$i++) {
                DB::table('Penghargaan')->where('id_Penghargaan',$id_Penghargaannya[$i])->update([
                        'id_user'               => Session()->get('id_user'),
                        'id_kategori_Penghargaan'    => $request->id_kategori_Penghargaan
                    ]);
            }
            return redirect('admin/Penghargaan')->with(['sukses' => 'Data kategori telah diubah']);
        }
    }

    //Status
    public function status_Penghargaan($status_Penghargaan)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myPenghargaan           = new Penghargaan_model();
        $Penghargaan             = $myPenghargaan->status_Penghargaan($status_Penghargaan);
        $kategori_Penghargaan    = DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Penghargaan',
                        'Penghargaan'            => $Penghargaan,
                        'kategori_Penghargaan'   => $kategori_Penghargaan,
                        'content'           => 'admin/Penghargaan/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Kategori
    public function kategori($id_kategori_Penghargaan)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myPenghargaan           = new Penghargaan_model();
        $Penghargaan             = $myPenghargaan->all_kategori_Penghargaan($id_kategori_Penghargaan);
        $kategori_Penghargaan    = DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Penghargaan',
                        'Penghargaan'            => $Penghargaan,
                        'kategori_Penghargaan'   => $kategori_Penghargaan,
                        'content'           => 'admin/Penghargaan/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $kategori_Penghargaan    = DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Tambah Penghargaan',
                        'kategori_Penghargaan'   => $kategori_Penghargaan,
                        'content'           => 'admin/Penghargaan/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // edit
    public function edit($id_Penghargaan)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myPenghargaan           = new Penghargaan_model();
        $Penghargaan             = $myPenghargaan->detail($id_Penghargaan);
        $kategori_Penghargaan    = DB::table('kategori_Penghargaan')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Edit Penghargaan',
                        'Penghargaan'            => $Penghargaan,
                        'kategori_Penghargaan'   => $kategori_Penghargaan,
                        'content'           => 'admin/Penghargaan/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama_Penghargaan'   => 'required|unique:Penghargaan',
                            'kode_Penghargaan'   => 'required|unique:Penghargaan',
                            'isi'           => 'required',
                            'gambar'        => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath        = public_path('upload/image/thumbs/');
        $img = Image::make($image->getRealPath(),array(
            'width'     => 150,
            'height'    => 150,
            'grayscale' => false
        ));
        $img->save($destinationPath.'/'.$input['nama_file']);
        $destinationPath = public_path('upload/image/');
        $image->move($destinationPath, $input['nama_file']);
        // END UPLOAD
        $slug_nama_Penghargaan = str_slug($request->nama_Penghargaan, '-');
        if($request->mulai_diskon=='') {
            $mulai_diskon = NULL;
        }else{ 
            $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon)); 
        }
        if($request->selesai_diskon=='') {
            $selesai_diskon = NULL;
        }else{ 
            $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon)); 
        }
        DB::table('Penghargaan')->insert([
           'id_user'                => Session()->get('id_user'),
            'id_kategori_Penghargaan'    => $request->id_kategori_Penghargaan,
            'slug_Penghargaan'           => $slug_nama_Penghargaan,
            'kode_Penghargaan'           => strtoupper(str_replace(' ','',$request->kode_Penghargaan)),
            'nama_Penghargaan'           => $request->nama_Penghargaan,
            'status_Penghargaan'         => $request->status_Penghargaan,
            'satuan'                => $request->satuan,
            'urutan'                => $request->urutan,
            'deskripsi'             => $request->deskripsi,
            'isi'                   => $request->isi,
            'harga_jual'            => $request->harga_jual,
            'harga_beli'            => $request->harga_beli,
            'harga_terendah'        => $request->harga_terendah,
            'harga_tertinggi'       => $request->harga_tertinggi,
            'gambar'                => $input['nama_file'],
            'keywords'              => $request->keywords,
            'mulai_diskon'          => $mulai_diskon,
            'selesai_diskon'        => $selesai_diskon,
            'besar_diskon'          => $request->besar_diskon,
            'jenis_diskon'          => $request->jenis_diskon,
            'jumlah_order_min'      => $request->jumlah_order_min,
            'jumlah_order_max'      => $request->jumlah_order_max,
            'stok'                  => $request->stok,
            'berat'                 => $request->berat,
            'ukuran'                => $request->ukuran,
            'tanggal_post'          => date('Y-m-d H:i:s') 
        ]);
        return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama_Penghargaan'   => 'required',
                            'kode_Penghargaan'   => 'required',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:2048',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/thumbs/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_nama_Penghargaan = str_slug($request->nama_Penghargaan, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{ 
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon)); 
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{ 
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon)); 
            }
            DB::table('Penghargaan')->where('id_Penghargaan',$request->id_Penghargaan)->update([
                'id_user'                => Session()->get('id_user'),
                'id_kategori_Penghargaan'    => $request->id_kategori_Penghargaan,
                'slug_Penghargaan'           => $slug_nama_Penghargaan,
                'kode_Penghargaan'           => strtoupper(str_replace(' ','',$request->kode_Penghargaan)),
                'nama_Penghargaan'           => $request->nama_Penghargaan,
                'status_Penghargaan'         => $request->status_Penghargaan,
                'satuan'                => $request->satuan,
                'urutan'                => $request->urutan,
                'deskripsi'             => $request->deskripsi,
                'isi'                   => $request->isi,
                'harga_jual'            => $request->harga_jual,
                'harga_beli'            => $request->harga_beli,
                'harga_terendah'        => $request->harga_terendah,
                'harga_tertinggi'       => $request->harga_tertinggi,
                'gambar'                => $input['nama_file'],
                'keywords'              => $request->keywords,
                'mulai_diskon'          => $mulai_diskon,
                'selesai_diskon'        => $selesai_diskon,
                'besar_diskon'          => $request->besar_diskon,
                'jenis_diskon'          => $request->jenis_diskon,
                'jumlah_order_min'      => $request->jumlah_order_min,
                'jumlah_order_max'      => $request->jumlah_order_max,
                'stok'                  => $request->stok,
                'berat'                 => $request->berat,
                'ukuran'                => $request->ukuran,
            ]);
        }else{
            $slug_nama_Penghargaan = str_slug($request->nama_Penghargaan, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{ 
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon)); 
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{ 
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon)); 
            }
            DB::table('Penghargaan')->where('id_Penghargaan',$request->id_Penghargaan)->update([
                'id_user'                => Session()->get('id_user'),
                'id_kategori_Penghargaan'    => $request->id_kategori_Penghargaan,
                'slug_Penghargaan'           => $slug_nama_Penghargaan,
                'kode_Penghargaan'           => strtoupper(str_replace(' ','',$request->kode_Penghargaan)),
                'nama_Penghargaan'           => $request->nama_Penghargaan,
                'status_Penghargaan'         => $request->status_Penghargaan,
                'satuan'                => $request->satuan,
                'urutan'                => $request->urutan,
                'deskripsi'             => $request->deskripsi,
                'isi'                   => $request->isi,
                'harga_jual'            => $request->harga_jual,
                'harga_beli'            => $request->harga_beli,
                'harga_terendah'        => $request->harga_terendah,
                'harga_tertinggi'       => $request->harga_tertinggi,
                'keywords'              => $request->keywords,
                'mulai_diskon'          => $mulai_diskon,
                'selesai_diskon'        => $selesai_diskon,
                'besar_diskon'          => $request->besar_diskon,
                'jenis_diskon'          => $request->jenis_diskon,
                'jumlah_order_min'      => $request->jumlah_order_min,
                'jumlah_order_max'      => $request->jumlah_order_max,
                'stok'                  => $request->stok,
                'berat'                 => $request->berat,
                'ukuran'                => $request->ukuran,
            ]);
        }
        return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_Penghargaan)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('Penghargaan')->where('id_Penghargaan',$id_Penghargaan)->delete();
        return redirect('admin/Penghargaan')->with(['sukses' => 'Data telah dihapus']);
    }
}
