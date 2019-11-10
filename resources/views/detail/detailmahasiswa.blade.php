<!DOCTYPE html>
<html>

    <head>
        <body>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <title> Mahasiswa </title>
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
<h1 class=mt-3>Edit Data Mahasiswa</h1>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" disbled="readonly" placeholder="Masukkan Nama" name="nama" value="{{ $mahasiswa->nama }}">
    </div>
 
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" id="npm" disbled="readonly" placeholder="Masukkan npm" name="npm"
    value="{{ $mahasiswa->npm }}">
    
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" disbled="readonly" placeholder="Masukkan email" name="email" value="{{ $mahasiswa->email }}">
  </div>
 
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" disbled="readonly" placeholder="Masukkan jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}">
  </div>
 
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" disbled="readonly" placeholder="Masukkan alamat" name="alamat" value="{{ $mahasiswa->alamat }}">
  </div>
 
  <div class="form-group">
    <label for="nomor">Nomor Telepon</label>
    <input type="text" class="form-control" id="nomor" disbled="readonly" placeholder="Masukkan nomor telepon" name="nomor" value="{{ $mahasiswa->nomor }}">
  </div>
  <a href="{{$mahasiswa->id}}/edit" class="btn btn-primary size-kata">Edit</a>
        <form action="/index/{{$mahasiswa->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger size-kata">Delete</button>
        </form>
    <a href="/index" class="btn btn-info size-kata">Exit</a>

</div>
</div>
</div>
    
    </body>
</html>
