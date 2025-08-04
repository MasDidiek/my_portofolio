<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mylogo</a>
                <div class="d-flex align-items-center ms-auto">
                    <span class="text-white me-3">Welcome, Didiek</span>
                    <form action="" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-outline-light btn-sm" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row flex-nowrap">
                <nav class="col-md-3 col-lg-2 d-md-block bg-whote sidebar collapse min-vh-100 p-0">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <span class="me-2"><i class="bi bi-house"></i></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="me-2"><i class="bi bi-person"></i></span>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('portofolio.index') }}">
                                    <span class="me-2"><i class="bi bi-briefcase"></i></span>
                                    Portofolio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="me-2"><i class="bi bi-gear"></i></span>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                    <h1 class="h2">Dashboard</h1>
                    <div class="alert alert-info mt-4" role="alert">
                        Selamat datang di halaman admin dashboard!
                    </div>
                    <!-- Main content goes here -->
                </main>
            </div>
        </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>