<x-layout>

    <div class="container">
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Delete User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h4>Are You Want To Delete Record <span class="badge bg-primary rounded-0">{{$user->fullname}}</span> <span>With ID</span> <span class="badge bg-primary rounded-0">{{$user->id}}</span>?</h4>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-danger mx-2">Yes,Delete It</button>
                        <a class="btn btn-warning" href="{{route('users')}}">No,Take Me Back</a>
                    </div>
                </div>

              <!-- /.card-body -->
            </form>
          </div>
    </div>

</x-layout>