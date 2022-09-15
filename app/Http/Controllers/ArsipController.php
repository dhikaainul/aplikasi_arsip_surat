<?php

namespace App\Http\Controllers;

use App\Arsip;
use Session;
use DB;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function showdataarsip()
    {
        $arsip = Arsip::all();
        return view('content.dataarsip', ['arsip' => $arsip]);
    }
    public function showunggaharsip()
    {
        $arsip = Arsip::all();
        return view('content.formarsip', ['arsip' => $arsip]);
    }
    public function lihatarsip($id)
    {
        $arsip = Arsip::find($id);
        // dd($arsip);
        return view('content.lihatarsip', ['arsip' => $arsip]);
    }
    public function about()
    {
        return view('content.about');
    }
    public function getDownload($id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $pdf = DB::table('arsip')->where('id', $id)->value('pdf');
    
        $file = public_path(). "/files_pdf/".$pdf;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $pdf, $headers);
    }
    public function simpanarsip(Request $request)
    {
        $request->validate([
            'no_surat' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'pdf' => 'required',
            'pdf.*' => 'mimes:PDF,pdf'
        ]);
        // if ($request->hasFile('pdf') == true ) {
        //     $foto_siswa = $request->file('foto')->store('images', 'public');
        // }
        if ($request->hasfile('pdf')) {
            $file_pdf = $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files_pdf'), $file_pdf);
        }
        $judul = $request->judul;
        $data = [
            'no_surat' => $request->no_surat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'pdf' => $file_pdf,
        ];
        Arsip::create($data);
        Session::flash('success', 'Simpan Data Arsip ' . $judul . ' Berhasil');
        return redirect('/');
    }
    public function editarsip($id)
    {
        $arsip = Arsip::find($id);
        return view('content.editarsip', ['arsip' => $arsip]);
    }
    public function updatearsip(Request $request, $id)
    {
        $judul = DB::table('arsip')->where('id', $id)->value('judul');
        $arsip = Arsip::find($id);
        $arsip->no_surat = $request->no_surat;
        $arsip->kategori = $request->kategori;
        $arsip->judul = $request->judul;
        if ($request->hasfile('pdf')) {
            $file_pdf = $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files_pdf'), $file_pdf);
            $arsip->pdf =$file_pdf;
        } else {
            $pdf = Arsip::where('id', $id)->value('pdf');
            $arsip->pdf = $pdf;
        }
        $arsip->save();
        Session::flash('success', 'Ubah data arsip ' . $judul . ' Berhasil.');
        return redirect('/');
    }
    public function hapusarsip($id)
    {
        $judul = DB::table('arsip')->where('id', $id)->value('judul');
        Arsip::destroy($id);
        Session::flash('success', 'Hapus data arsip ' . $judul . ' berhasil.');
        return redirect('/');
    }
}
