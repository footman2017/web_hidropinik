<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" integrity="sha256-IvM9nJf/b5l2RoebiFno92E5ONttVyaEEsdemDC6iQA=" crossorigin="anonymous" />
   {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>
   <title>Hidroponik Dashboard - @yield('title')</title>
</head>
<body>
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
             <a class="navbar-brand" href="#">
                 <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">
                 <b>Toko Online</b>
             </a>
         <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                 <li class="nav-item">
                     <a class="nav-link" href="/">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/tambah">Input Mahasiswa</a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="/diagram">Data Ph</a>
              </li>
             </ul>
         </div>
     </nav>
   </div>
  <br>
  <br>
  <br>
  <div class="container">
      @yield('content')
   </div>
   <br>
   <br>
   <br>
   {{-- <footer>
      <div class="container">
         <p align="center"> Copyright &copy; 2019</p>
      </div>
  </footer> --}}
</body>
</html>

@yield('script')