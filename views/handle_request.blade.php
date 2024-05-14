<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if (Session::get('error'))
            <div class="row">
                <div class="col-md-4 offset-4 mt-2 py-2 rounded bg-danger text-white fw-bold">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 offset-4 rounded bg-info mt-3 py-3">
                <h2 class="text-center fw-bold" style="font-size: 20px">Tambah Data Produk</h2>
                <form class="mt-3" action="{{ route('postRequest', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukkan gambar produk">
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama produk">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="weight" placeholder="Masukkan berat produk">
                        @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="price" placeholder="Masukkan harga produk">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stock" placeholder="Masukkan stok produk">
                        @error('stock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Kondisi</label>
                        <select class="form-select form-control" aria-label="Default select example" name="condition">
                            <option selected value="">Pilih Kondisi Barang</option>
                            <option value="Bekas">Bekas</option>
                            <option value="Baru">Baru</option>
                        </select>
                        @error('condition')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Tuliskan deskripsi produk yang akan dijual"></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-dark mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            var image = $('#image').val();
            var nama = $('#nama').val();
            var berat = $('#berat').val();
            var harga = $('#harga').val();
            var stok = $('#stok').val();
            var kondisi = $('#kondisi').val();
            var deskripsi = $('#deskripsi').val();

            if (image == '') {
                e.preventDefault();
                alert('Error. Field Gambar wajib diisi.');
                return false;
            }
            // Validasi ekstensi gambar
            var imageExt = image.split('.').pop().toLowerCase();
            if ($.inArray(imageExt, ['jpg', 'jpeg', 'png']) == -1) {
                e.preventDefault();
                alert('Error. Gambar hanya boleh dalam format JPG atau PNG.');
                return false;
            }

            // Validasi ukuran gambar
            var imageSize = $('#image')[0].files[0].size; // Mendapatkan ukuran file
            if (imageSize > 2000000) { // Ukuran maksimal 2 MB (dalam byte)
                e.preventDefault();
                alert('Error. Ukuran gambar maksimal 2 MB.');
                return false;
            }

            if (nama == '') {
                e.preventDefault();
                alert('Error. Field Nama wajib diisi.');
                return false;
            }
            // Dan seterusnya untuk validasi berat, harga, stok, kondisi, dan deskripsi
        });
    });
</script>
</script> --}}

</html>
