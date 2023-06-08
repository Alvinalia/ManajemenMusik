@include('navbarrr')

<h1>Tambah Data</h1>

@if($errors->any())
    <div class="alert-danger">
        Perbaiki Kesalahan Berikut Sebelum Melanjutkan
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>

@endif

<div class="mt-5 ml-5 col-5">
    <form action="User" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="no_tlp">no Telp</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" name="level" required>
        </div>



        

        
        
        
       
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>
