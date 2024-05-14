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
                <h2 class="text-center fw-bold" style="font-size: 20px">Edit Data Produk {{ $product->id }}</h2>
                <form class="mt-3" action="{{ route('update_product', ['product' => $product->id, 'user' => $user->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Masukkan gambar produk"
                            value="{{ $product->image }}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            placeholder="Masukkan nama produk"value="{{ $product->name }}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="berat" id="berat"
                            placeholder="Masukkan berat produk"value="{{ $product->weight }}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga"
                            placeholder="Masukkan harga produk"value="{{ $product->price }}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok"
                            placeholder="Masukkan stok produk"value="{{ $product->stock }}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Kondisi</label>
                        <select class="form-select form-control" aria-label="Default select example" name="kondisi" id="kondisi">
                            <option value="Bekas" {{ $product->condition == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                            <option value="Baru" {{ $product->condition == 'Baru' ? 'selected' : '' }}>Baru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                            placeholder="Tuliskan deskripsi produk yang akan dijual">{{ $product->description }}</textarea>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-dark mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

               
