<!DOCTYPE html>
<html>
    <head>
        <title>
            tambah Data    
        </title>        
    </head>
    <body>
        <h1>
            Form Tambah Data User
        </h1>
        <form action="{{ url('/user/tambah_simpan') }}" method="post">
            {{ csrf_field() }}

            <label for="">Username</label>
            <input type="text" name="username" placeholder="Masukan Username">
            <br>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama">
            <br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Masukan Password">
            <br>
            <label for="">Level ID</label>
            <input type="number" name="level_id" placeholder="Masukan Level ID">
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </body>
</html>