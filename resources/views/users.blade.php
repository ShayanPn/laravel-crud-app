<x-layout>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <button data-toggle="modal" data-target="#modal-xl" class="text-white btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i><span class="mx-2">ADD USER</span></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>FullName</th>
                      <th>Email</th>
                      <th>Avatar</th>
                      <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                      @if($users->count() === 0)
                      <tr>
                        <td colspan="8">No Records Found...</td>
                      </tr>
                      @endif
                    @foreach ($users as $user)
                    <tr>
                      <td>{{$user->fullname}}</td>
                      <td>{{$user->email}}</td>
                      <td><div class="text-center"><img width="50px" src="{{asset($user->avatar)}}" alt=""></div></td>
                      <td>{{$user->created_at}}</td>
                      <td><a  class="text-primary mx-4" href="/user/{{$user->id}}"><i class="nav-icon fa fa-eye" aria-hidden="true"></i></a></a><a class="text-danger" href="user/delete/{{$user->id}}"><i class="nav-icon fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach

                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Created At</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="d-flex flex-row justify-content-center">
                  {{$users->links()}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>

      {{-- modal-xl --}}
      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Create Record</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="POST">
                        @csrf
                        @method('POST')
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name">
                                    @error('name') <p class="badge bg-danger">{{$message}}</p> @enderror
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" name="email">
                                    @error('email') <p class="badge bg-danger">{{$message}}</p> @enderror
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job</label>
                                    <input type="text" class="form-control @error('job') is-invalid @enderror" placeholder="Enter Job" name="job">
                                    @error('job') <p class="badge bg-danger">{{$message}}</p> @enderror
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="text" class="form-control @error('age') is-invalid @enderror" placeholder="Enter Age" name="age">
                                    @error('age') <p class="badge bg-danger">{{$message}}</p> @enderror
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Address" name="address">
                            @error('address') <p class="badge bg-danger">{{$message}}</p> @enderror
                          </div>
                      </div>
                      <!-- /.card-body -->
            
                      <div class="card-footer d-flex flex-row justify-content-center">
                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</x-layout>