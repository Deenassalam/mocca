<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Komunitas Baru</title>

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
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('homekoor')}}">Home</a>
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
</br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Siapkan Tim</h2>
        
        </br>
</br>
</br>
<a style="width: 20%; background-color: grey !important; margin-left: 80% !important;" href="{{ route('siapkantimform')}}" class=" btnadd">Buat Tim Baru</a>
</br>
</br>
        <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color: grey; text-align: center">
                      <th style="width: 5%;">ID</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th style="width: 15%;">Pekerjaan</th>
                      <th style="width: 15%;">Alamat</th>
                      <th style="width: 2%;">Usia</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color: grey; text-align: center">
                       <th style="width: 5%;">ID</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th style="width: 15%;">Pekerjaan</th>
                      <th style="width: 15%;">Alamat</th>
                      <th style="width: 2%;">Usia</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($relawan as $key => $datas)
                  @if($datas->status=="Tersedia")
                         <td style="width: 5%;">{{ $datas->id_relawan }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->status }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->noHP }}</td>
                        <td style="width: 15%;">{{ $datas->keahlian }}</td>
                        <td style="width: 15%;">{{ $datas->alamat }}</td>
                        <td style="width: 2%;">{{ $datas->usia }}</td>
                        <td> {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                         <a href="{{ route('relawan.editRelawanTim', $datas->id_relawan) }}" class=" btn btn-sm btn-primary">Pilih Tim</a></td>

                        
                    </tr>
                    @endif
                @endforeach
                  </tbody>
                </table>
              </div>
               {{ $relawan->links()}}
      </div>
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
