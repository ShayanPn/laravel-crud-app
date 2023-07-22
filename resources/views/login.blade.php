<x-noside>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Laravel</b>CRUD</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg"><span class="badge bg-secondary">SignIn</span></h4>

      <form action="" method="POST">
        @csrf
        @method('POST')
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
              
            </div>
          </div>
        </div>
        @error('email') <p class="badge bg-danger">{{$message}}</p> @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password') <p class="badge bg-danger">{{$message}}</p> @enderror
        <div class="row d-flex flex-row justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn bg-gradient-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


<hr>
      <p class="mb-1">
        <a href="{{route('forgotpassword.get')}}"><i class="fa fa-key" aria-hidden="true"></i> I Forgot My Password</a>
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center"><i class="fa fa-user-plus" aria-hidden="true"></i> Register A New Membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
</x-noside>