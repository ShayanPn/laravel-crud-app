<x-noside>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Laravel</b>CRUD</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <h4 class="login-box-msg"><span class="badge bg-secondary">SignUp</span></h4>

      <form action="" method="POST">
        @csrf
        @method('POST')
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="FullName" name="fullname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('fullname') <p class="badge bg-danger">{{$message}}</p> @enderror
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row d-flex flex-row justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn bg-gradient-primary btn-block text-center">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr>
      <a href="{{route('login')}}" class="text-center"><i class="fa fa-address-book" aria-hidden="true"></i> I Already Have A Membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
</x-noside>
