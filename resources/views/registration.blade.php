@extends('layouts.app')
@section('title', 'Pendaftaran')

@section('content')
<h2>Form Pendaftaran Seminar Sidang</h2>
      <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Judul Skripsi (ID)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Judul Skripsi (EN)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Dosen Pembimbing 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Dosen Pembimbing 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Tipe Pengajuan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">File Skripsi</label>
                    <div class="col-sm-10">
                      <input type="file">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Foto Bukti Chat Pembimbing 1</label>
                    <div class="col-sm-10">
                      <input type="file">
                    </div>
                </div>
                <div class="mb-3 row ml-0 mt-2">
                    <label class="col-sm-2 col-form-label">Foto Bukti Chat Pembimbing 2</label>
                    <div class="col-sm-10">
                      <input type="file">
                    </div>
                </div>
                <button type="button" class="btn btn-primary">Daftar</button>
              </div>
            </div>
          </div>
      </div>
@endsection

@section('script')
    <script type="text/javascript">
        
    </script>
@endsection