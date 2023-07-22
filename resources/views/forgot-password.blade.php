<x-noside>
    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <a href=""><b>Admin</b>LTE</a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
        
              <form action="" method="post">
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
                @error('email') <p class="badge bg-danger text-danger">{{$message}}</p> @enderror
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn bg-gradient-primary btn-block">Request New Password</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
        
              <p class="mt-3 mb-1">
                <a href="{{route('login')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</a>
              </p>
              <p class="mb-0">
                <a href="{{route('register')}}" class="text-center"><i class="fa fa-address-book" aria-hidden="true"></i> Register a new membership</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
        <!-- /.login-box -->
</x-noside>