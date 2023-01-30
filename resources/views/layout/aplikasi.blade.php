
    
<div class="card">
    
    <div class="card-body">
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
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
       <div class="">
        <form action="" method="get">
            <div class="input-group">
                <button class="btn btn-primary input-group-text">Search :</button>
                  <input type="text" class="form-control" name="keyword" placeholder="keyword">
                </div>
              </div>
        </form>
    </div>
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
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
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
    <form onsubmit="return " class="d-inline" action="{{ '/siswa/'.$item->nomor_induk }}" method='post'>
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
                    @csrf
                    @method('DELETE')
                    <button  type="submit"  class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>
    </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
    </div>
    </div>
    </div>
    


    
<div class="card">
    <div class="card-body">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary  float-right" data-toggle="modal" data-target="#exampleModalCenter">
    +Tambah User
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
          
          @include('komponen/pesan')
          
            
                  <div class="card-body">
                    <p class="login-box-msg">Regist</p>
                 
                  <form action="/sesi/create" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Name</label> 
                      <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label> 
                      <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label">Password</label> 
                      <input type="password" name="password" class="form-control">
                  </div>
                  <div class="mb-3 d-grid">
                      <button name="submit" type="submit" class="btn
                      btn-primary">Register</button>
                  </div>
                </div>
          </div>
          </div>
          
          <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
          <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
          </body>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</form>

<form action="" method="get">
            <table class="table table-md table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($user as $item)   
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td></td>
            <td>
                <form onsubmit="return confirm('Yakin dek?')" action="{{ '/User/'.$item->name }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="fa fa-trash" type="submit"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</form>
</table>
{{ $user->links() }}

</div>
    </div>
</div>
