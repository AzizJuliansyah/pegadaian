
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pegadaian</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue2">
				
				<a href="index.html" class="logo">
					<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle sidenav-overlay-toggler">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" class="form-control" name="keyword" placeholder="keyword">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/avatar5.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a href="/sesi" class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="layout/home">
								<i  class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item active submenu">
							<a href="/siswa">
								<i class="fas fa-list"></i>
								<p>Table</p>
							</a>
						</li>
            			<li class="nav-item">
							<a href="/qrcode">
								<i class="fas fa-home"></i>
								<p>Scan QR Code</p>
							</a>
						</li>
            			<li class="nav-item">
							<a href="/User">
								<i class="fas fa-user"></i>
								<p>User</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
    <div class="main-panel">
			<div class="content">
				
    <div class="card">
      <div class="card-body">
      <button type="button" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal">
          +Tambah Data
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="/siswa" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="nomor_iduk" class="form-label">Nomor telepon</label>
                        <input type="text" class="form-control" name='nomor_induk' id="nomor_induk" value="{{ Session::get('nomor_induk')}}">
                      </div>
                      <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" name='nama' id="nama" value="{{ Session::get('nama')}}">
                        </div>
                        <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <textarea class="form-control" name='alamat'>{{ Session::get('alamat')}}</textarea>
                        </div>
                        <div class="mb-3">
                          <label for="foto" class="form-label">Foto</label>
                          <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                      
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">SIMPAN</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>
	  </div>
	  <form action="" method="get">
			 <div class="float-right mr-3">
				 <div class="input-group">
				<button class="fas fa-search input-group-text"></button>
				  <input type="text" class="form-control" name="keyword" placeholder="keyword">
				</div>
			</div>
			</form>
      <table class="table align-items-center mb-0">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Id Pelanggan</th>
                  <th>Nama</th>
                  <th>berat</th>
                  <th>Date</th>
                  <th>Foto</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody class="table align-items-center mb-0">
              @foreach ($data as $index=>$item)
              <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $item->nomor_induk}}</td>
                  <td>{{ $item->nama}}</td>
                  <td>{{ $item->alamat}}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                      @if ($item->foto)
                              <img style="max-width: 50px;max-height: 50px" src="{{ url('foto').'/'.$item->foto }}"/>
                          @endif
                      </td>
                      <td>
      <!-- Modal detail -->
      <button type="button" class="fa fa-eye fa-border" data-toggle="modal" data-target="#exampleModalCenter"></button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div>
                      <table class="table table-md table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>Berat</th>
                                  <th>Date</th>
                                  <th>Foto</th>
                                  <th>Qr</th>
                                  
                              </tr>
                          </thead>
                  
                          <tbody>
                              <tr>
                                  <td>{{ $item->alamat }}</td>
                                  <td>{{ $item->created_at }}</td>
                                  <td>
                                      @if ($item->foto)
                                          <img style="max-width: 50px;max-height: 50px" src="{{ url('foto').'/'.$item->foto }}"/>
                                      @endif
                                  </td>
                                  <td>{!! QrCode::size(50)->generate($item->qr_code) !!}</td>
                              </tr>
                          </tbody>
                      </table>  
                  </div>
              </div>
            </div>
          </div>
        </div>
      
      <!-- Modal edit -->
      <button type="button" class="fa fa-edit fa-border" data-toggle="modal" data-target="#edit"></button>
      <!-- Modal -->
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ '/siswa/'.$item->nomor_induk }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                    
                  <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name='nama' id="nama" value="{{ $item->nama }}">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Berat</label>
                      <textarea class="form-control" name='alamat'>{{ $item->alamat }}</textarea>
                    </div>
                    
                    <div class="mb-3">
                      <label for="foto" class="form-label">Foto</label>
                      <input type="file" class="form-control" name="foto" id="foto">
                    </div>
                    @if ($item->foto)
                        <div class="mb-3">
                          <img style="max-width: 50px;max-height:50px" src="{{ url('foto').'/'.$item->foto }}"/>
                        </div>
                    @endif
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
                </div>
              </div>
      </div>                         
      </form>
                          <a class='fa fa-print fa-border' style="color: black" href='{{ url('/info'.$item->nomor_induk) }}'></a>
      <!-- Modal Delete-->
      <button type="button" class="fas fa-trash fa-border" data-toggle="modal" data-target="#delete"></button>
      
      <!-- Modal -->
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin dek?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form onsubmit="return " class="d-inline" action="{{ '/siswa/'.$item->nomor_induk }}" method='post'>
                      @csrf
                      @method('DELETE')
                      <button  type="submit"  class="btn btn-danger">Hapus</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                  </div>
                  <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
      {{$data->links()}}
      </div>
      </div>
      </div>
  </div>

      
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>