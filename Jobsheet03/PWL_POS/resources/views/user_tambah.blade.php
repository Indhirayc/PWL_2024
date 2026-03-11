<body>
    <h1>Form Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        
        {{ csrf_field() }}

        <label>Username:</label>
        <input type="text" name="username" placeholder="Masukkan username">
        <br>
        <label>Nama:</label>
        <input type="text" name="nama" placeholder="Masukkan nama">
        <br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Masukkan password">
        <br>
        <label>Level Id:</label>
        <input type="number" name="level_id" placeholder="Masukkan ID level pengguna">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form> 
</body>