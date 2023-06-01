@include('navbarrr')
@section('content')
<h2>Genre kalangan Musik</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id</th>
            <th>id_label</th>
            <th>id_genre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listGenreMusik as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->id_label}}</td><br>
            <td>{{$data->id_genre}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>