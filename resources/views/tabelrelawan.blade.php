<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Data Relawan</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TITAN</a>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('tabelrelawan')}}">Relawan</a>
            </li>
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">TIM</a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{route('tabeltimrha')}}">TIM RHA</a>
            <a class="dropdown-item" href="{{route('tabeltimtrc')}}">TIM Reaksi Cepat</a>
            <a class="dropdown-item" href="{{route('tabeltimtbk')}}">Tim Bantuan Kesehatan</a>
            </div>
        </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('homekoor') }}">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img style="margin-top: 5px;" src="/assets/user.png">
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
            </div>
        </li>
          </ul>
        </div>
      </div>
    </nav>

    </br>
  </br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Data Relawan</h2>
        
        </br>
      </br>
</br>
<div class="row">
@foreach($relawan as $key => $datas)

  <div class="col-md-6">
  <div class="container">
    <div class="card2">
     <div class="card-header" style="background-color: #F0EDEC !important; margin-left: -10px; margin-top: 10px; margin-bottom: 20px;font-family: palatino;color: #2c3e50;" >
      <table class="table2 " >
            <tr><td>Nama:</td><td>{{ $datas->nama }}</td></tr>
             <tr><td>ID:</td><td>{{ $datas->id_relawan}}</td></tr>
            <tr><td>Status    :</td><td> {{ $datas->status }}</td></tr>
            <tr><td>Email     : </td><td>{{ $datas->email }}</td></tr>
           <tr><td> No HP     :</td><td> {{ $datas->noHP }}</td></tr>
            <tr><td>Keahlian:</td><td>{{ $datas->keahlian }}</td></tr>
           <tr><td> Alamat    :</td><td> {{ $datas->alamat }}</td></tr>
           <tr><td> Usia      : </td><td>{{ $datas->usia }}</td></tr>
           <tr><td> Tim       :</td><td> {{ $datas->tim }}</td></tr>
          </table>
     </div>
      <div class="card-body" style="text-align: center; justify-content: center; font-size: 35px; font-family: palatino; vertical-align: center; color:#2C3E50 ; margin-top: 30px; margin-left: -10px;">
             <img src="{{ url('uploads/file/'.$datas->foto) }}" style="width: 150px; height: 200px; padding-right: 15px;">
            
            
</div>
    </div>
</br>
  </div>
</div>
    @endforeach
  </div>
    {{ $relawan->links()}}






       
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
   <!-- Bootstrap core JavaScript -->
    <script src="/assets/jquery.js"></script>
    <script src="/assets/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/jquery.easing.js"></script>
    <script src="/assets/jquery.magnific-popup.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/jqBootstrapValidation.js"></script>


    <script src="/js/lokasi.js"></script>
    <!-- Custom scripts for this template -->
    <script src="/assets/freelancer.js"></script>

  </body>

</html>
