@extends('master.master')
@section('title','Data Arsip')
@section('content')
<div class="pagetitle">
    <h1>Tabel Data Arsip Surat</h1>
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
                    <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat</p>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Waktu Pengarsipan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arsip as $key => $item)
                            <tr>
                                <td>{{ $item->no_surat }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusarsip{{ $item->id }}">
                                            Hapus
                                        </button>
                                        <a href="/download/{{ $item->id }}" class="btn btn-warning">Unduh</a>
                                        <a href="/lihatarsip/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="hapusarsip{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                Apakah Anda yakin ingin menghapus arsip surat ini
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="row g-3 needs-validation" role="form" action="/hapusarsip/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <div class="text-center">
                                                    <br>
                                                    <button type="submit" class="btn btn-danger">Iya</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/unggaharsip" class="btn btn-primary">Arsipkan Surat</a>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection