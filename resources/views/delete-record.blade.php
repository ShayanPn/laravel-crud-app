<x-layout>

    <div class="container">
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Delete Record</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span>Are You Want To Delete Record {{$record->id}}?</span>
                                <button type="submit" class="btn btn-danger">Yes,Delete It</button>
                                <a class="btn btn-warning" href="{{route('Records')}}">No,Take Me Back</a>
                            </div>
                        </div>
                    </div>
                </div>

              <!-- /.card-body -->
            </form>
          </div>
    </div>

</x-layout>