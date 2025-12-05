<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Health Center</title>

    <!-- BOOTSTRAP (LATEST FROM ORIGINAL CDN - jsDelivr) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
          crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body { background-color: #f8f9fa; }
        .navbar-custom { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); }
        .sidebar { background-color: #2d3748; min-height: 100vh; padding: 20px 0; }
        .sidebar .nav-link { color: #cbd5e0; padding: 12px 20px; }
        .sidebar .nav-link:hover { background-color: #4a5568; color: #fff; }
        .main-content { padding: 30px; }
        .card { border: none; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .card-header { background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); color: white; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <i class="fas fa-hospital"></i> Rural Health Center
        </a>
    </div>
</nav>

<!-- MAIN CONTAINER -->
<div class="row g-0">
    <!-- SIDEBAR -->
    <div class="col-md-2 sidebar">
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="fas fa-th-large me-2"></i> Dashboard
            </a>
            <a class="nav-link {{ request()->routeIs('immunization') ? 'active' : '' }}" href="{{ route('immunization') }}">
                <i class="fas fa-syringe me-2"></i> Immunization
            </a>
            <a class="nav-link {{ request()->routeIs('inventory') ? 'active' : '' }}" href="{{ route('inventory') }}">
                <i class="fas fa-boxes me-2"></i> Inventory
            </a>
            <a class="nav-link {{ request()->routeIs('appointments') ? 'active' : '' }}" href="{{ route('appointments') }}">
                <i class="fas fa-calendar me-2"></i> Appointments
            </a>
            <a class="nav-link {{ request()->routeIs('reports') ? 'active' : '' }}" href="{{ route('reports') }}">
                <i class="fas fa-file-chart-line me-2"></i> Reports
            </a>
            <a class="nav-link {{ request()->routeIs('architecture') ? 'active' : '' }}" href="{{ route('architecture') }}">
                <i class="fas fa-sitemap me-2"></i> Architecture
            </a>
        </nav>
    </div>
    <!-- MAIN CONTENT -->
    <div class="col-md-10 main-content">
        <div class="tab-content">
            @yield('content')
        </div>
    </div>
</div>

<!-- BOOTSTRAP JS (LATEST FROM ORIGINAL CDN - jsDelivr) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>
</html>
