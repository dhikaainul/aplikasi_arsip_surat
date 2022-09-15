@extends('master.master')
@section('title','Data Arsip')
@section('content')
<div class="pagetitle">
    <h1>Form Edit Arsip Surat</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Edit Arsip Surat</a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Arsip Surat</h5>
                    <h6>Unggah surat yang telah terbit pada form ini untuk diarsipkan</h6>
                    <h6>Catatan : </h6>
                    <h6>* Gunakan file berformat PDF</h6>
                    <br>

                    <!-- General Form Elements -->
                    <form class="row g-3 needs-validation" role="form" action="/updatearsip/{{$arsip->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">No Surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_surat" value="{{ $arsip->no_surat }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="kategori">
                                    <option value="{{ $arsip->kategori }}">{{ $arsip->kategori }}</option>
                                    <option value="Undangan">Undangan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Nota Dinas">Nota Dinas</option>
                                    <option value="Pemberitahuan">Pemberitahuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" value="{{ $arsip->judul }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Surat (PDF)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="pdf" value="{{ $arsip->pdf }}">
                                {{ $arsip->pdf }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <a href="/" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-success">Update Data</button>
                            </div>
                        </div>
                    </form>
                    <!-- End General Form Elements -->
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <img src="../../../assets\img\arsip3.png" height="365">
            </div>
        </div>
    </div>
</section>
@endsection