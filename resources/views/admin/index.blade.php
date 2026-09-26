<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Dashboard Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
        crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f5f7fb;
        }

        /* =========================
           SIDEBAR
        ========================= */
        .sb-sidenav-dark {
            background: linear-gradient(180deg, #1e293b 0%, #111827 100%);
        }

        .sb-sidenav-dark .sb-sidenav-menu-heading {
            color: #94a3b8;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .sb-sidenav-dark .nav-link {
            color: #cbd5e1;
            border-radius: 10px;
            margin: 4px 12px;
            padding: 11px 14px;
            transition: 0.2s;
        }

        .sb-sidenav-dark .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .sb-sidenav-dark .nav-link.active {
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            color: #ffffff;
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .sb-nav-link-icon {
            width: 25px;
        }

        /* =========================
           NAVBAR
        ========================= */
        .sb-topnav {
            background-color: #ffffff !important;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        /* =========================
           CONTENT
        ========================= */
        .dashboard-header {
            margin-bottom: 25px;
        }

        .dashboard-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .dashboard-subtitle {
            color: #64748b;
            margin-bottom: 0;
        }

        /* =========================
           STAT CARDS
        ========================= */
        .stat-card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.06);
            transition: 0.25s;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.10);
        }

        .stat-card-body {
            padding: 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-label {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 7px;
            font-weight: 500;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .icon-purple {
            background-color: #ede9fe;
            color: #7c3aed;
        }

        .icon-blue {
            background-color: #dbeafe;
            color: #2563eb;
        }

        .icon-green {
            background-color: #dcfce7;
            color: #16a34a;
        }

        .icon-orange {
            background-color: #ffedd5;
            color: #ea580c;
        }

        /* =========================
           MAIN PANEL
        ========================= */
        .dashboard-panel {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        .panel-header {
            padding: 20px 22px;
            border-bottom: 1px solid #eef2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title {
            margin: 0;
            font-size: 17px;
            font-weight: 700;
            color: #1e293b;
        }

        .panel-text {
            color: #64748b;
            font-size: 14px;
        }

        /* =========================
           QUICK MENU
        ========================= */
        .quick-menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .quick-item {
            text-decoration: none;
            padding: 18px;
            border-radius: 14px;
            border: 1px solid #eef2f7;
            background: #ffffff;
            transition: 0.2s;
        }

        .quick-item:hover {
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 5px 18px rgba(15, 23, 42, 0.07);
            border-color: #c7d2fe;
        }

        .quick-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            background: #eef2ff;
            color: #4f46e5;
        }

        .quick-title {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .quick-desc {
            font-size: 12px;
            color: #64748b;
            margin: 0;
        }

        /* =========================
           WELCOME BOX
        ========================= */
        .welcome-box {
            border-radius: 16px;
            padding: 25px;
            color: #ffffff;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.25);
            position: relative;
            overflow: hidden;
        }

        .welcome-box::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            right: -60px;
            top: -70px;
        }

        .welcome-box h4 {
            font-weight: 700;
            margin-bottom: 8px;
            position: relative;
            z-index: 2;
        }

        .welcome-box p {
            margin: 0;
            opacity: 0.9;
            font-size: 14px;
            position: relative;
            z-index: 2;
        }

        /* =========================
           FOOTER
        ========================= */
        footer {
            color: #64748b;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 768px) {
            .quick-menu {
                grid-template-columns: 1fr;
            }

            .dashboard-title {
                font-size: 24px;
            }
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- =========================
         TOP NAVBAR
    ========================= -->
    <nav class="sb-topnav navbar navbar-expand navbar-light">

        <!-- Brand -->
        <a class="navbar-brand ps-3 text-primary" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-store me-2"></i>
            Admin Panel
        </a>

        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4"
            id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Spacer -->
        <div class="ms-auto me-3">
            <span class="text-muted small">
                <i class="fas fa-user-circle me-1"></i>
                Administrator
            </span>
        </div>

    </nav>


    <!-- =========================
         MAIN LAYOUT
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

                        <!-- Menu -->
                        <div class="sb-sidenav-menu-heading">
                            MENU UTAMA
                        </div>

                        <!-- Dashboard -->
                        <a class="nav-link active"
                            href="{{ route('admin.dashboard') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>

                            Dashboard
                        </a>

                        <!-- Produk -->
                        <a class="nav-link"
                            href="{{ route('admin.produk.index') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-box"></i>
                            </div>

                            Produk
                        </a>

                    </div>
                </div>


                <!-- Sidebar Footer -->
                <div class="sb-sidenav-footer">

                    <div class="small">
                        Login sebagai:
                    </div>

                    <strong>Administrator</strong>

                </div>

            </nav>

        </div>


        <!-- =========================
             MAIN CONTENT
        ========================= -->
        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4 py-4">

                    <!-- =========================
                         HEADER
                    ========================= -->
                    <div class="dashboard-header">

                        <h1 class="dashboard-title">
                            Dashboard
                        </h1>

                        <p class="dashboard-subtitle">
                            Selamat datang di halaman administrasi sistem.
                            Kelola data produk dengan mudah melalui menu di samping.
                        </p>

                    </div>


                    <!-- =========================
                         WELCOME BOX
                    ========================= -->
                    <div class="welcome-box mb-4">

                        <h4>
                            Selamat Datang, Admin 👋
                        </h4>

                        <p>
                            Pantau dan kelola data produk melalui dashboard
                            administrasi ini.
                        </p>

                    </div>


                    <!-- =========================
                         STAT CARDS
                    ========================= -->
                    <div class="row g-4 mb-4">

                        <!-- Total Produk -->
                        <div class="col-xl-3 col-md-6">

                            <div class="stat-card">

                                <div class="stat-card-body">

                                    <div>
                                        <div class="stat-label">
                                            Total Produk
                                        </div>

                                        <h2 class="stat-number">
                                            0
                                        </h2>
                                    </div>

                                    <div class="stat-icon icon-purple">
                                        <i class="fas fa-box"></i>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Produk Tersedia -->
                        <div class="col-xl-3 col-md-6">

                            <div class="stat-card">

                                <div class="stat-card-body">

                                    <div>
                                        <div class="stat-label">
                                            Produk Tersedia
                                        </div>

                                        <h2 class="stat-number">
                                            0
                                        </h2>
                                    </div>

                                    <div class="stat-icon icon-blue">
                                        <i class="fas fa-check-circle"></i>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Stok Menipis -->
                        <div class="col-xl-3 col-md-6">

                            <div class="stat-card">

                                <div class="stat-card-body">

                                    <div>
                                        <div class="stat-label">
                                            Stok Menipis
                                        </div>

                                        <h2 class="stat-number">
                                            0
                                        </h2>
                                    </div>

                                    <div class="stat-icon icon-orange">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Kategori -->
                        <div class="col-xl-3 col-md-6">

                            <div class="stat-card">

                                <div class="stat-card-body">

                                    <div>
                                        <div class="stat-label">
                                            Kategori Produk
                                        </div>

                                        <h2 class="stat-number">
                                            0
                                        </h2>
                                    </div>

                                    <div class="stat-icon icon-green">
                                        <i class="fas fa-tags"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =========================
                         BOTTOM CONTENT
                    ========================= -->
                    <div class="row g-4">

                        <!-- Quick Menu -->
                        <div class="col-lg-8">

                            <div class="dashboard-panel">

                                <div class="panel-header">

                                    <div>
                                        <h5 class="panel-title">
                                            Menu Cepat
                                        </h5>

                                        <span class="panel-text">
                                            Akses fitur administrasi
                                        </span>
                                    </div>

                                </div>


                                <div class="p-4">

                                    <div class="quick-menu">

                                        <!-- Produk -->
                                        <a href="{{ route('admin.produk.index') }}"
                                            class="quick-item">

                                            <div class="quick-icon">
                                                <i class="fas fa-box"></i>
                                            </div>

                                            <div class="quick-title">
                                                Kelola Produk
                                            </div>

                                            <p class="quick-desc">
                                                Tambah, edit, dan hapus data
                                                produk.
                                            </p>

                                        </a>


                                        <!-- Data Produk -->
                                        <a href="{{ route('admin.produk.index') }}"
                                            class="quick-item">

                                            <div class="quick-icon">
                                                <i class="fas fa-list"></i>
                                            </div>

                                            <div class="quick-title">
                                                Lihat Data Produk
                                            </div>

                                            <p class="quick-desc">
                                                Lihat seluruh data produk
                                                yang tersedia.
                                            </p>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Information -->
                        <div class="col-lg-4">

                            <div class="dashboard-panel h-100">

                                <div class="panel-header">

                                    <div>
                                        <h5 class="panel-title">
                                            Informasi
                                        </h5>

                                        <span class="panel-text">
                                            Status sistem
                                        </span>
                                    </div>

                                </div>


                                <div class="p-4">

                                    <div class="d-flex align-items-center mb-3">

                                        <div class="stat-icon icon-green me-3">
                                            <i class="fas fa-circle-check"></i>
                                        </div>

                                        <div>
                                            <div class="fw-bold text-dark">
                                                Sistem Aktif
                                            </div>

                                            <small class="text-muted">
                                                Dashboard siap digunakan
                                            </small>
                                        </div>

                                    </div>


                                    <hr>


                                    <div class="d-flex align-items-center">

                                        <div class="stat-icon icon-blue me-3">
                                            <i class="fas fa-database"></i>
                                        </div>

                                        <div>
                                            <div class="fw-bold text-dark">
                                                Data Produk
                                            </div>

                                            <small class="text-muted">
                                                Kelola melalui menu Produk
                                            </small>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>


            <!-- =========================
                 FOOTER
            ========================= -->
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


    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script src="{{ asset('admin-assets/js/scripts.js') }}"></script>

</body>

</html>