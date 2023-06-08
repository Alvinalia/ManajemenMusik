@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/User/{{$listuser->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$listuser->id}}" required>
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$listuser->username}}" required>
        </div>

        <div class="mb-3">
            <label for="no_tlp">no Telp</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{$listuser->no_tlp}}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$listuser->jenis_kelamin}}" required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$listuser->alamat}}" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{$listuser->password}}" required>
        </div>

        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="{{$listuser->level}}" required>
        </div>



        

        
        
        
       
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>