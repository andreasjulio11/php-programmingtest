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
            margin-left:30px;
            }
        </style>
    </head>
    <div>   
            <div>
                <div class="title content" >
                 <p> Mahasiswa </p>
                </div>
        <div class="container">
        @if(session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                    </div>
                    @endif
        <div class="row">
        <div class="col-10">
        <h1 class=mt-3>Daftar Mahasiswa</h1>
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
      @foreach($mahasiswa as $mhs)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$mhs->nama}}</td>
        <td>{{$mhs->npm}}</td>
        <td>{{$mhs->email}}</td>
        <td>{{$mhs->jurusan}}</td>
        <td>
              <a href="/index/{{ $mhs->id }}" class="badge badge-info">detail</a>
         </td> 
        </tr>
      @endforeach
        </tbody>
        </table>
        </div>
        </div>
        </div>
                <div class="content">
                    <div class= "mt-10 flex-center margin-bottom">
                        <a href="/" class="btn btn-primary">BACK</a>
                        <a href="/index/create" class="btn btn-primary margin-left">Insert Data</a>
                    </div>
                </div>

                   
                   
                </div>
               
                   
                
    </div>
    </body>

</html>
