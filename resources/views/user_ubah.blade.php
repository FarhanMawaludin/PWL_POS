<!DOCTYPE html>
<html>
    <head>
        <title>
            Ubah Data    
        </title>        
    </head>
    <body>
        <h1>
            Form Ubah Data User
        </h1>
        <a href="{{ url('/user')}}">
            Kembali
        </a>
        <form action="{{ url('/user/ubah_simpan/' . $data->user_id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label for="">Username</label>
            <input type="text" name="username" placeholder="Masukan Username" value="{{$data->username}}">
            <br>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama" value="{{$data->nama}}">
            <br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Masukan Password"  value="{{$data->password}}">
            <br>
            <label for="">Level ID</label>
            <input type="number" name="level_id" placeholder="Masukan Level ID" value="{{$data->level_id}}" >
            <input type="submit" class="btn btn-success" value="Ubah" >
        </form>
    </body>
</html>