<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Produk - Admin</title>

    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .content-wrapper {
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .page-title {
            font-weight: 700;
            color: #333;
        }
    </style>
</head>

<body>

<div class="content-wrapper">

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="page-title">
                    <i class="fas fa-pen-to-square me-2"></i>
                    Edit Produk
                </h2>

                <p class="text-muted mb-0">
                    Ubah informasi produk
                </p>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('admin.produk.index') }}"
               class="btn btn-secondary">

                <i class="fas fa-arrow-left me-1"></i>
                Kembali

            </a>

        </div>


        <!-- Form Edit -->
        <div class="card shadow-sm">

            <div class="card-body p-4">

                <form action="{{ route('admin.produk.update', $produk->id) }}"
                      method="POST">

                    @csrf

                    @method('PUT')


                    <!-- Nama Produk -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Produk
                        </label>

                        <input type="text"
                               name="nama_produk"
                               class="form-control"
                               value="{{ $produk->nama_produk }}"
                               required>

                    </div>


                    <!-- Kategori -->
                    <div class="mb-3">

                        <label class="form-label">
                            Kategori
                        </label>

                        <select name="kategori"
                                class="form-select"
                                required>

                            <option value="">
                                Pilih kategori
                            </option>

                            <option value="Makanan"
                                {{ $produk->kategori == 'Makanan' ? 'selected' : '' }}>
                                Makanan
                            </option>

                            <option value="Minuman"
                                {{ $produk->kategori == 'Minuman' ? 'selected' : '' }}>
                                Minuman
                            </option>

                            <option value="Alat Tulis"
                                {{ $produk->kategori == 'Alat Tulis' ? 'selected' : '' }}>
                                Alat Tulis
                            </option>

                        </select>

                    </div>


                    <!-- Harga -->
                    <div class="mb-3">

                        <label class="form-label">
                            Harga
                        </label>

                        <input type="number"
                               name="harga"
                               class="form-control"
                               value="{{ $produk->harga }}"
                               min="0"
                               required>

                    </div>


                    <!-- Stok -->
                    <div class="mb-3">

                        <label class="form-label">
                            Stok
                        </label>

                        <input type="number"
                               name="stok"
                               class="form-control"
                               value="{{ $produk->stok }}"
                               min="0"
                               required>

                    </div>


                    <!-- Tombol -->
                    <div class="d-flex gap-2">

                        <!-- Batal -->
                        <a href="{{ route('admin.produk.index') }}"
                           class="btn btn-secondary">

                            <i class="fas fa-arrow-left me-1"></i>
                            Batal

                        </a>


                        <!-- Simpan -->
                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save me-1"></i>
                            Simpan Perubahan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>