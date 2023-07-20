<x-layout>

        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">View Record</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" value="{{$record->name}}" class="form-control" placeholder="Enter Name" name="name" disabled>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" value="{{$record->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" disabled>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Job</label>
                                <input type="text" value="{{$record->job}}" class="form-control" placeholder="Enter Job" name="job" disabled>
                                
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="text" value="{{$record->age}}" class="form-control" placeholder="Enter Age" name="age" disabled>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" value="{{$record->address}}" class="form-control" placeholder="Enter Address" name="address" disabled>
                      </div>
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
        </div>

</x-layout>