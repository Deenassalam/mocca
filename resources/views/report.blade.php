
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/assets/sb-admin-2.css" rel="stylesheet">


<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>
<div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a  href="{{ route('homekoor') }}">
                  <h6 class="m-0 font-weight-bold text-primary">Kembali ke halaman utama</h6>
                </a>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <table class="container">
	<thead>
		<tr>
			<th><h1>Waktu Laporan</h1></th>
			<th><h1>ID Bencana</h1></th>
			<th><h1>Jenis</h1></th>
			<th><h1>Lokasi</h1></th>
			<th><h1>Skala</h1></th>
			<th><h1>Deskripsi</h1>
			<th><h1>Terakhir Di-Update</h1></th>
			<th><h1>Status</h1></th>
		
		</tr>
	</thead>
	<tbody>
		@foreach($bencana as $key => $datas)
		<tr>
			<td>{{ $datas->created_at }}</td>
			<td>{{ $datas->id_benc }}</td>
			<td>{{ $datas->jenis}}</td>
			<td>{{$datas->daerah}}</td>
			<td>{{$datas->skala}}</td>
			<td>{{$datas->deskripsi}}</td>
			<td>{{ $datas->updated_at }} </td>
			<td>{{$datas->status}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
                  </div>
                </div>
              </div>
            </div>
        </div></div>
</div>