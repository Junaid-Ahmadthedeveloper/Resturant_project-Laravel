@extends('admin.main')

@section('chef')

{{-- <main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4"> --}}


                                <form method="POST" action="{{ route('cook.update',$data->id) }}" enctype="multipart/form-data" class="forms-sample">
                                    @csrf
                                  <div class="form-group mb-3 col-6 mx-auto" >
                                    <label for=""> Name</label>
                                    <input type="text" class="form-control" name="name" id="" value="{{ $data->name}}" placeholder="">
                                  </div>

                                  <div class="form-group mb-3 col-6 mx-auto">
                                    <label for="">Dish</label>
                                    <input type="text" class="form-control" id=""value="{{ $data->dish}}" name="dish" placeholder="">
                                  </div>

                                  <div class="form-group mb-3 col-6 mx-auto">
                                    <label for="">Nationality</label>
                                    <input type="TEXT" class="form-control" id="" value="{{ $data->nationality}}" name="nationality" placeholder="">
                                  </div>
                                  {{-- <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" id="" name="file" >
                                  </div> --}}
                                  <br>
                                  <button type="submit" style="margin-left:250px;" class="btn btn-primary me-2">Submit</button>
                                  {{-- <button class="btn btn-dark">Cancel</button> --}}
                                </form>
{{--
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main> --}}











@endsection
