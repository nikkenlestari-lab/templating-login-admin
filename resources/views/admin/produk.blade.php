<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Produk - Admin Panel</title>

    <!-- SB Admin CSS -->
    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
        crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
        }

        /* Navbar */
        .sb-topnav {
            background-color: #ffffff !important;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            font-weight: 700;
        }

        /* Sidebar */
        .sb-sidenav-dark {
            background: linear-gradient(180deg, #1e293b 0%, #111827 100%);
        }

        .sb-sidenav-dark .nav-link {
            color: #cbd5e1;
            border-radius: 10px;
            margin: 4px 12px;
            padding: 11px 14px;
        }

        .sb-sidenav-dark .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.08);
            color: white;
        }

        .sb-sidenav-dark .nav-link.active {
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            color: white;
        }

        .sb-nav-link-icon {
            width: 25px;
        }

        /* Content */
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #64748b;
        }

        /* Card */
        .product-card {
            background: white;
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        .card-header-custom {
            padding: 20px 22px;
            border-bottom: 1px solid #eef2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title-custom {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            color: #1e293b;
        }

        /* Button */
        .btn-add {
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 9px 16px;
            font-weight: 600;
        }

        .btn-add:hover {
            color: white;
            opacity: 0.9;
        }

        /* Table */
        .table-container {
            padding: 22px;
        }

        .table thead th {
            background-color: #f8fafc;
            color: #475569;
            font-size: 13px;
            font-weight: 700;
            border-bottom: 1px solid #e2e8f0;
            padding: 14px;
        }

        .table tbody td {
            padding: 14px;
            vertical-align: middle;
            color: #475569;
            font-size: 14px;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Modal */
        .modal-content {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            border-bottom: 1px solid #eef2f7;
        }

        .modal-title {
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
            color: #334155;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- =========================
         NAVBAR
    ========================= -->
    <nav class="sb-topnav navbar navbar-expand navbar-light">

        <a class="navbar-brand ps-3 text-primary"
            href="{{ route('admin.dashboard') }}">

            <i class="fas fa-store me-2"></i>
            Admin Panel

        </a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4"
            id="sidebarToggle">

            <i class="fas fa-bars"></i>

        </button>

        <div class="ms-auto me-3">

            <span class="text-muted small">

                <i class="fas fa-user-circle me-1"></i>

                Administrator

            </span>

        </div>

    </nav>


    <!-- =========================
         LAYOUT
    ========================= -->
    <div id="layoutSidenav">

        <!-- =========================
             SIDEBAR
        ========================= -->
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark"
                id="sidenavAccordion">

                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">
                            MENU UTAMA
                        </div>


                        <!-- Dashboard -->
                        <a class="nav-link"
                            href="{{ route('admin.dashboard') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>

                            Dashboard

                        </a>


                        <!-- Produk -->
                        <a class="nav-link active"
                            href="{{ route('admin.produk.index') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-box"></i>
                            </div>

                            Produk

                        </a>

                    </div>

                </div>


                <div class="sb-sidenav-footer">

                    <div class="small">
                        Login sebagai:
                    </div>

                    <strong>Administrator</strong>

                </div>

            </nav>

        </div>


        <!-- =========================
             CONTENT
        ========================= -->
        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4 py-4">

                    <!-- Page Header -->
                    <div class="mb-4">

                        <h1 class="page-title">
                            Produk
                        </h1>

                        <p class="page-subtitle mb-0">
                            Kelola data produk pada sistem.
                        </p>

                    </div>


                    <!-- =========================
                         PESAN SUCCESS
                    ========================= -->
                    @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show"
                            role="alert">

                            <i class="fas fa-check-circle me-2"></i>

                            {{ session('success') }}

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                            </button>

                        </div>

                    @endif


                    <!-- =========================
                         ERROR VALIDASI
                    ========================= -->
                    @if($errors->any())

                        <div class="alert alert-danger">

                            <strong>Terjadi kesalahan:</strong>

                            <ul class="mb-0 mt-2">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>
    
                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <!-- =========================
                         PRODUCT CARD
                    ========================= -->
                    <div class="product-card">

                        <!-- Card Header -->
                        <div class="card-header-custom">

                            <div>

                                <h5 class="card-title-custom">
                                    Data Produk
                                </h5>

                                <small class="text-muted">
                                    Daftar produk yang tersedia
                                </small>

                            </div>


                            <!-- =========================
                                 TOMBOL TAMBAH PRODUK
                            ========================= -->
                            <button type="button"
                                class="btn btn-add"
                                data-bs-toggle="modal"
                                data-bs-target="#tambahProdukModal">

                                <i class="fas fa-plus me-2"></i>

                                Tambah Produk

                            </button>

                        </div>

                        <!-- Filter Kategori -->
                        <div class="px-4 pt-3">
                            <form action="{{ route('admin.produk.index') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kategori" class="form-label">
                                            Filter Kategori
                                        </label>

                                        <select name="kategori" id="kategori" class="form-select">
                                            <option value="">Semua Kategori</option>

                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->kategori }}"
                                                    {{ request('kategori') == $item->kategori ? 'selected' : '' }}>
                                                    {{ $item->kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-filter me-1"></i>
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- =========================
                             TABLE
                        ========================= -->
                        <div class="table-container">

                            <div class="table-responsive">

                                <table class="table align-middle">

                                    <thead>

                                        <tr>

                                            <th width="5%">
                                                No
                                            </th>

                                            <th>
                                                Nama Produk
                                            </th>

                                            <th>
                                                Kategori
                                            </th>

                                            <th>
                                                Harga
                                            </th>

                                            <th>
                                                Stok
                                            </th>

                                            <th width="20%">
                                                Aksi
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($produk as $item)

                                            <tr>

                                                <td>
                                                    {{ $item->id }}
                                                </td>

                                                <td>
                                                    {{ $item->nama_produk }}
                                                </td>

                                                <td>
                                                    {{ $item->kategori }}
                                                </td>

                                                <td>
                                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                                </td>

                                                <td>
                                                    {{ $item->stok }}
                                                </td>

                                                <td>

                                                    <!-- Edit -->
                                                    <a href="{{ route('admin.produk.edit', $item->id) }}"
                                                        class="btn btn-warning btn-sm">

                                                        <i class="fas fa-edit"></i>
                                                        Edit

                                                    </a>


                                                    <!-- Hapus -->
                                                    <form action="{{ route('admin.produk.destroy', $item->id) }}"
                                                        method="POST"
                                                        class="d-inline"
                                                        onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                                                        @csrf

                                                        @method('DELETE')

                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">

                                                            <i class="fas fa-trash"></i>
                                                            Hapus

                                                        </button>

                                                    </form>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>

                                                <td colspan="6"
                                                    class="text-center py-5">

                                                    <i class="fas fa-box-open fa-3x text-muted mb-3"></i>

                                                    <p class="mb-0 text-muted">
                                                        Belum ada data produk.
                                                    </p>

                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </main>


            <!-- Footer -->
            <footer class="py-4 bg-white mt-auto border-top">

                <div class="container-fluid px-4">

                    <div class="d-flex align-items-center justify-content-between small">

                        <div>
                            Copyright &copy; Admin Panel 2026
                        </div>

                        <div>

                            <a href="#" class="text-decoration-none">
                                Privacy Policy
                            </a>

                            &nbsp;·&nbsp;

                            <a href="#" class="text-decoration-none">
                                Terms &amp; Conditions
                            </a>

                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>


    <!-- ==================================================
         MODAL TAMBAH PRODUK
    =================================================== -->
    <div class="modal fade"
        id="tambahProdukModal"
        tabindex="-1"
        aria-labelledby="tambahProdukModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <h5 class="modal-title"
                        id="tambahProdukModalLabel">

                        <i class="fas fa-box-open me-2 text-primary"></i>

                        Tambah Produk

                    </h5>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>


                <!-- Form -->
                <form action="{{ route('admin.produk.store') }}"
                    method="POST">

                    @csrf

                    <div class="modal-body">

                        <!-- Nama Produk -->
                        <div class="mb-3">

                            <label class="form-label">
                                Nama Produk
                            </label>

                            <input type="text"
                                name="nama_produk"
                                class="form-control"
                                placeholder="Masukkan nama produk"
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

                                <option value="Makanan">
                                    Makanan
                                </option>

                                <option value="Minuman">
                                    Minuman
                                </option>

                                <option value="Alat Tulis">
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
                                placeholder="Masukkan harga"
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
                                placeholder="Masukkan jumlah stok"
                                min="0"
                                required>

                        </div>

                    </div>


                    <!-- Modal Footer -->
                    <div class="modal-footer">

                        <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">

                            Batal

                        </button>

                        <button type="submit"
                            class="btn btn-primary">

                            <i class="fas fa-save me-1"></i>

                            Simpan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- ==================================================
         JAVASCRIPT
    =================================================== -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SB Admin JS -->
    <script src="{{ asset('admin-assets/js/scripts.js') }}"></script>

</body>

</html>