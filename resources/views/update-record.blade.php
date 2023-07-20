<x-layout>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Record</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{$record->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name">
                            @error('name') <p class="badge bg-danger">{{$message}}</p> @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" value="{{$record->email}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" name="email">
                            @error('email') <p class="badge bg-danger">{{$message}}</p> @enderror
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Job</label>
                            <input type="text" value="{{$record->job}}" class="form-control @error('job') is-invalid @enderror" placeholder="Enter Job" name="job">
                            @error('job') <p class="badge bg-danger">{{$message}}</p> @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" value="{{$record->age}}" class="form-control @error('age') is-invalid @enderror" placeholder="Enter Age" name="age">
                            @error('age') <p class="badge bg-danger">{{$message}}</p> @enderror
                          </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" value="{{$record->address}}" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Address" name="address">
                    @error('address') <p class="badge bg-danger">{{$message}}</p> @enderror
                  </div>
              </div>
              <!-- /.card-body -->
    
              <div class="card-footer">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
    </x-layout>