<!DOCTYPE html>
<html>

    <head>
        <body>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta error_reporting>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <title> Insert Data</title>
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .size1{
            font-size:30px;
            }

            .margin-bottom {
                margin-bottom: 30px;
            }

            .margin-left{
            margin-left:10px;
            }

            .size-kolom{
            width:200px;
            margin-left:10px;
            margin-bottom:10px;
            left:10px;
            maxlength=150;
            disabled:readonly;
            }
            .size-kata{
             width:150px;

                font-size:20px;
            }
            
        </style>
    </head>

<div class="container">
<div class="row">
<div class="col-10">
<h1 class=mt-3>Insert Data Mahasiswa</h1>


<form method="POST" action="/index">
@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-inavlid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
 
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control @error('npm') is-inavlid @enderror" id="npm" placeholder="Masukkan npm" name="npm">
    @error('npm')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
  </div>
 
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
  </div>
 
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
  </div>
 
  <div class="form-group">
    <label for="nomor">Nomor Telepon</label>
    <input type="text" class="form-control" id="nomor" placeholder="Masukkan nomor telepon" name="nomor">
  </div>
  <button type="submit" class="btn btn-primary">Insert Data</button>
</form>
</div>
</div>
</div>
 

     
    </body>
</html>
