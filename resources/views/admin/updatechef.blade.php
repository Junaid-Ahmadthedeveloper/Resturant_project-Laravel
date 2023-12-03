@extends('admin.main')
@section('chef')

<form action="{{ route('update.chef', $data->id)}}"  method="post" enctype="multipart/form-data" >

    @csrf
<div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Dish Name</label>
    <input type="text" name="dish_name" class="form-control" value="{{ $data->dish_name}}" id="" aria-describedby="">

</div>
  <div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Chef</label>
    <input type="text" name="chef" class="form-control" value="{{ 'images/'.$data->chef}}" id="" aria-describedby="\">

</div>
  <div class="mb-3 col-6 mx-auto">
    <label for="" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" value="{{ $data->price}}" id="" aria-describedby="\">

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

