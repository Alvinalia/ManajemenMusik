@include('navbarrr')
@section('content')
<div class="my-3">
    <a href="create" class= "btn btn-dark ml-5">Add Data</a>
</div>
<h2>Daftar Lagu 2023 Slebew</h2>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
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
            <td>
            <a href="edit/{{$data->id}}" class="btn btn-info">Edit</a>
            
            <form class="d-inline" action="/User/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
            
        </tr>
        @endforeach
    </tbody>
</table>
