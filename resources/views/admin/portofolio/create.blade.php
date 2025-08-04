<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

         <style>
            .nav-link{
                color: #666;
            }
            .nav-link.active{
                color: #000;
                font-weight: bold;
            }
        </style>
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
                                <a class="nav-link" aria-current="page" href="#">
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
                                <a class="nav-link active" href="{{ route('portofolio.index') }}">
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
                    <div class="main-content p-4 mt-4 bg-white rounded shadow-sm">
                        <h4 class="mb-4">Add New Portofolio</h4>


                        <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="shortdesc" class="form-label">Short Description</label>
                                <input type="text" class="form-control" id="shortdesc" name="shortdesc" required>
                            </div>
                            <div class="mb-3">
                                <label for="longdesc" class="form-label">Long Description</label>
                                <textarea class="form-control" id="longdesc" name="longdesc" rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="difficulty" class="form-label">Difficulty</label>
                                <select class="form-select" id="difficulty" name="difficulty" required>
                                    <option value="">Select Difficulty</option>
                                    <option value="Simple">Simple</option>
                                    <option value="Moderate">MediModerateum</option>
                                    <option value="Complex">Complex</option>
                                    <option value="Very Complex">Very Complex</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="Running">Running</option>
                                    <option value="Archived">Archived</option>
                                </select>
                            </div>

                              <div class="mb-3">
                                <label for="longdesc" class="form-label">Link App</label>
                                <input type="text" class="form-control" id="link_app" name="link_app"  required">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <!-- Main content goes here -->
                </main>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
