@extends('admin.main')


@section('chef')

<form action="{{ route('user.update', $data->id)}}"  method="post" enctype="multipart/form-data" >

    @csrf
<div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ $data->name}}" id="" aria-describedby="">

</div>
  <div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">email</label>
    <input type="text" name="email" class="form-control" value="{{ 'images/'.$data->email}}" id="" aria-describedby="\">

</div>
  <div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" value="{{ $data->password}}" id="" aria-describedby="\">

</div>
</div>
<div class="mb-3 col-6 mx-auto">
  <label for="" class="form-label">Confirm Password </label>
  <input type="text" name="password_confirmation" class="form-control" value="" id="" aria-describedby="\">

</div>

{{-- <div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Image</label>
    <input type="file" name="file" class="form-control"  id="" aria-describedby="\">

</div> --}}

<br>
  <!-- <button type="submit" name="submit"  class="btn btn-primary btn-block">Submit</button> -->
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit" name="submit"  type="button">Submit</button>
  </div>
</form>
@endsection

