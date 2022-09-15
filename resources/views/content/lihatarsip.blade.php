@extends('master.master')
@section('title','Data Arsip')
@section('content')
<div class="pagetitle">
    <h1>Lihat Arsip Surat</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Data Arsip</a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Arsip Surat</h5>
                    <p>No Surat : {{ $arsip->no_surat }}</p>
                    <p>Kategori : {{ $arsip->kategori }}</p>
                    <p>Judul    : {{ $arsip->judul }}</p>
                    <p>Waktu Pengarsipan : {{ $arsip->created_at }}</p>
                    <iframe src="/files_pdf/{{ $arsip->pdf }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
                    <br></br>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <a href="/" class="btn btn-primary">Kembali</a>
                            <a href="/download/{{ $arsip->id }}" class="btn btn-warning">Unduh</a>
                            <a href="/editarsip/{{ $arsip->id }}" class="btn btn-success">Edit/Ganti File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection