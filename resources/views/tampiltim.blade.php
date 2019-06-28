@extends('base')
@section('content')

<section class="main-section">
	<div class="content">
		<div class="container-fluid" style="width: 250% !important; height: 200%;" >


          
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tenaga Kesehatan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Tim</th>
                      <th>Bencana</th>
                      <th>Info</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nama Tim</th>
                      <th>Bencana</th>
                      <th>Info</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($tim as $key => $datas)
                    <tr>
                        <td>{{ $datas->id_tim }}</td>
                        <td>{{ $datas->nama_tim }}</td>
                        <td>{{ $datas->id_bencana }}</td>
                        <td><input type="button" name="Info" value="Info"></td>
                        
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
    </div>
</section>
@endsection