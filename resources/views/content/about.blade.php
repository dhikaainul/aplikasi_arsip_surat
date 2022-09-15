@extends('master.master')
@section('title','About')
@section('content')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">About</a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="assets/img/Foto_Dhika.png" alt="Profile" class="rounded-circle">
                    <h2>Dhika Ainul Luthfi</h2>
                    <h3>D3 Manajemen Informatika</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Aplikasi ini dibuat oleh:</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8">: Dhika Ainul Luthfi</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">NIM</div>
                                <div class="col-lg-9 col-md-8">: 1931710104</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Jurusan</div>
                                <div class="col-lg-9 col-md-8">: Teknologi Informasi</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Program Studi</div>
                                <div class="col-lg-9 col-md-8">: D3 Manajemen Informatika</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kampus</div>
                                <div class="col-lg-9 col-md-8">: Politeknik Negeri Malang</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tanggal</div>
                                <div class="col-lg-9 col-md-8">: 13 September 2022</div>
                            </div>
                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection