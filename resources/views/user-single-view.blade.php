<x-layout>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">View User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">FullName</label>
                            <input type="text" value="{{$user->fullname}}" class="form-control" placeholder="Enter Name" name="name" disabled>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" disabled>
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                        <div class="form-group">
                            <label class="badge bg-secondary" for="exampleInputEmail1">Avatar</label>
                            <div class="my-4"><img width="100px" src="{{asset($user->avatar)}}" alt=""></div>

                        </div>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
    </div>

</x-layout>