@extends('admin.main')

@section('chef')
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<a href="{{ url('/addchef')}}" class="btn btn-primary" style="margin-left:870px;font-size: 14px; padding: 8px 16px; border-radius: 4px; text-decoration: none; color: #fff; background-color: #007bff; border: 1px solid #007bff;width:100px;height:40px;">Add Chef</a>
<br><br><table class="table table-hover my-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Dish_name</th>
            <th>Chef</th>
            <th>Image</th>
            <th>Price</th>
            <th>Created_at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach($chefs as $chef)
        <tr>
            <td>{{ $chef->id }}</td>
            <td>{{ $chef->dish_name }}</td>
            <td>{{ $chef->chef }}</td>
            <td><img src="{{ 'images/'. $chef->image }}" width="150px" height="100px" alt=""></td>
            <td>{{ $chef->price }}</td>
            <td>{{ $chef->created_at }}</td>
            <td>
                <a href="{{ route('delete.chef', $chef->id) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('edit.chef', $chef->id) }}" class="btn btn-info">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
