@extends('layouts.main')
@section('container')

<div id="layoutSidenav">

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Kelas</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('kelas.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                                <input type="text"  name="kode_kelas" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Masukkan Kode Kelas">
                            </div>
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text"  name="nama_kelas"class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas">
                            </div>
                            <div class="mb-3">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <input type="text"  name="tingkat" class="form-control" id="tingkat" name="tingkat" placeholder="Masukkan Tingkat Kelas">
                            </div>
                            <div class="mb-3">
                                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                                <input type="text"  name="wali_kelas"class="form-control" id="wali_kelas" name="wali_kelas" placeholder="Masukkan Nama Wali Kelas">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2024</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
