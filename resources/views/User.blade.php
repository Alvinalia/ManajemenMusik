@include('navbarrr')
@section('content')
<h2>Daftar Lagu 2023 Slebew</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id</th>
            <th>username </th>
            <th>no. Tlp</th>
            <th>jenis kelamin</th>
            <th>alamat</th>
            <th>password</th>
            <th>level</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listUser as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->no_tlp}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->password}}</td>
            <td>{{$data->level}}</td>

            
        </tr>
        @endforeach
    </tbody>
</table>