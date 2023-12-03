@extends('admin.main')
@section('chef')
<a href="{{ route('reservation_tbl')}}" class="btn btn-primary" style="font-size: 14px; padding: 8px 16px; border-radius: 4px; text-decoration: none; color: #fff; background-color: #007bff; border: 1px solid #007bff;width:100px;height:40px;">Reserve</a>
<a href="{{ route('reservation.completed')}}" class="btn btn-danger" style="margin-left:20px;font-size: 14px; padding: 8px 16px; border-radius: 4px; text-decoration: none; color: #fff; background-color: rgb(255, 0, 64); border: 1px solid #ff0080;width:100px;height:40px;">Completed</a>

<table class="table table-hover my-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>Time</th>
            <th>Phone#</th>
            <th>No of Guests</th>
            <th>Message</th>
            <th>Reserved By</th>
            <th>Status</th>
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
            <td>{{ $usrdata->Res_time }}</td>
            <td>{{ $usrdata->phone}}</td>
            <td>{{ $usrdata->nog }}</td>
            <td>{{ $usrdata->message }}</td>
            <td>{{ $usrdata->reserved_by}}</td>
            <td style="color:rgb(255, 0, 21);">{{ $usrdata->reservation_status }}</td>
            <td>{{ $usrdata->created_at }}</td>
            <td>
                <a href="{{ route('reservation_forcedelete',['id' => $usrdata->id]) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('reservation_restore',['id' => $usrdata->id]) }}" class="btn btn-info">Restore</a>


            </td>
            <td>

            </td>
        </tr>
        @endforeach
        </tbody >
</table>






@endsection
