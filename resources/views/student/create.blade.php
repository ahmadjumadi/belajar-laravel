@extends('template.master')

@section('judul')
  <h1>Manajemen Siswa</h1>
@endsection

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add New Student</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/student" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputNIS">Nomor Induk Siswa</label>
                <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Enter Nomor Induk Siswa">
              </div>
              <div class="form-group">
                <label for="inputNama">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Enter Nama Siswa">
              </div>
              <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection