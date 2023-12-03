@extends('admin.main')
@section('chef')
<a href="{{ route('cookform')}}" class="btn btn-info" style="margin-left:870px;font-size: 14px; padding: 8px 16px; border-radius: 4px; text-decoration: none; color: #fff; background-color: #007bff; border: 1px solid #007bff;width:100px;height:40px;">Add Cook</a>
<br><br><table class="table table-hover my-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cook</th>
            <th>Dish</th>
            <th>Nationality</th>
            <th>Image</th>
            <th>Created_at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {{-- @php
        $data = DB::table('users')->get();

    @endphp --}}
        @foreach($data as $usrdata)
        @php
        @endphp
        <tr>

            <td>{{ $usrdata->id }}</td>
            <td>{{ $usrdata->name }}</td>
            <td>{{ $usrdata->dish }}</td>
            <td>{{ $usrdata->nationality }}</td>
            <td><img src="{{ 'images/'.$usrdata->image }}" alt="" width="150px" height="100px"></td>
            <td>{{ $usrdata->created_at }}</td>
            <td>
                <a href="{{ route('cook.delete',['id' => $usrdata->id]) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('cook.edit',['id' => $usrdata->id]) }}" class="btn btn-info">Edit</a>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
        </tbody >
</table>






@endsection
