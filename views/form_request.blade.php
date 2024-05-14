<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('send_request') }}?status=true&action=hold" method="POST">
        @csrf()
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama_lengkap">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Deskripsi Diri</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Foto Profil</label>
            <input type="file" name="photo" id="">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
