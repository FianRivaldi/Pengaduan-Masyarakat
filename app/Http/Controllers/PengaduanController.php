<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;

class PengaduanController extends Controller
{
    public function index() {
        return view('pengaduan');
    }

    public function histori()
    {
        $datas = Pengaduan::get();
        return view('histori', compact('datas'));
    }

    public function store(Request $request) {
        $validate = $request->all();
        $validate = $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required'
        ]);
        if($request->file('foto')) {
            $validate['foto']->file('foto')->store('img_pengaduan');
        }
        Pengaduan::create($validate);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');

        // Pengaduan::create([
        //     'tgl_pengaduan',
        //     'nik',
        //     'isi_laporan',
        //     'foto'
        // ]);
        // return redirect()->back()->with('data berhasil terkirim');
    }


    



    public function delete($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	Pengaduan::table('pengaduan')->where('id_pengaduan',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect()->back();
}


    public function edit($id) {
        $datas = Pengaduan::find($id);
        dd('$data');
        return view('masyarakat.edit');
    }
    public function update($id) {
        $data = Pengaduan::findOrFail($id);
        if ($data->status == 'belumproses') {
            $status = 'proses';
        } else {
            $status = 'proses';
        }

        $data = Pengaduan::where('id_pengaduan', $id)->update(['status' => $status]);
        dd($data);
    }

    public function status($id_pengaduan) {
        Pengaduan::all();
        $status = Pengaduan::where('id_pengaduan', $id_pengaduan);

        
        $status_sekarang = $status->status;

        if($status_sekarang == 'belumproses') {
            Pengaduan::where('id', $id_pengaduan)->update(['status'=>'proses']);

        } else {
            Pengaduan::where('id', $id_pengaduan)->update(['status'=>'belumproses']);
        }
        // session::flash('sukses, status berhasil');
        return redirect()->back();
    }

    
 
    // public function generatepdf()
    // {
    // 	$pengaduan = Pengaduan::all();
 
    // 	$pdf = pdf::loadview('pengaduan_pdf',['pengaduan'=>$pengaduan]);
    // 	return $pdf->download('laporan-pegawai-pdf');
    // }

    // public function cetak_pdf()
    // {   
    // 	$pengaduan = Pengaduan::all();

    // 	return view('pages.user', ['data'=>$pengaduan]);
    // }
}
