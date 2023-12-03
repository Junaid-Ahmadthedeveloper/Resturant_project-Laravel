@extends('admin.main')
@section('chef')

<table class="table table-hover my-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>Usertype</th>
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
            <td>{{ $usrdata->email }}</td>
            <td>{{ $usrdata->usertype }}</td>
            <td>{{ $usrdata->created_at }}</td>
            <td>
                <a href="{{ route('user.delete',['id' => $usrdata->id]) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('user.edit',['id' => $usrdata->id]) }}" class="btn btn-info">Edit</a>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
        </tbody >
</table>






@endsection
