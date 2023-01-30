


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">

@include('komponen/pesan')

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a class="h1">Pegadaian</a>
        </div>
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

        </form>
    </div>
</div>
</div>
</div>

<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
</body>

