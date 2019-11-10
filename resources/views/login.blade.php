<!DOCTYPE html>
<html>

    <head>
        <body>


<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




        <title> Welcome !!</title>
       
      



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

            .margin-bottom {
                margin-bottom: 30px;
            }

            .gambar{
            height:200px;
            width:300px;
            margin-top:30px;
            }
        </style>
    </head>

   



    <div>
            <div>
            <div class="content">
                 <img class="gambar" src="{{ ('img/logo.png') }}">
                 </div>
                  <div class ="title position-ref content">
                     <p> Welcome to our website </p>
                  </div>
                  
            </div>   
        <div class ="flex-center">

       <form action="/index">         
                 <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="username">
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button class="btn btn-primary">Login</button>
            <a href="/register" class="btn btn-primary">Register</a>
            </form>    
            </div> 
    </div>    
        


   
    </body>
</html>
