@extends('admin.main')

@section('chef')

{{-- <main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4"> --}}
                        <h1 class="h2">Add Cook</h1>
                        {{-- <p class="lead">
                            Start creating the best possible user experience for you customers.
                        </p> --}}
                    </div>
                    <br>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">


                                <form method="POST" action="{{ route('cook.add') }}" enctype="multipart/form-data" class="forms-sample">
                                    @csrf
                                  <div class="form-group">
                                    <label for=""> Name</label>
                                    <input type="text" class="form-control" name="name" id="" placeholder="Enter cook name...">
                                  </div>

                                  <div class="form-group">
                                    <label for="">Dish</label>
                                    <input type="text" class="form-control" id="" name="dish" placeholder="Enter dish...">
                                  </div>

                                  <div class="form-group">
                                    <label for="">Nationality</label>
                                    <input type="TEXT" class="form-control" id="" name="nationality" placeholder="Enter cook residency...">
                                  </div>
                                  <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" id="" name="file" >
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                                  <button class="btn btn-dark">Cancel</button>
                                </form>

                            {{-- </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main> --}}











@endsection
