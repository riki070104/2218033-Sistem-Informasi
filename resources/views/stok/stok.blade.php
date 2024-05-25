<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stok</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('admin.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('admin.navbar')

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="d-flex justify-content-between mb-4">
                    <a href="{{ route('stok-create') }}"><button class="btn btn-primary">Tambah</button></a>
                    <a href="#"><button class="btn btn-primary">Cetak PDF</button></a>
                    <form class="d-none d-md-flex">
                        <input class="form-control bg-secondary border-0" type="search" placeholder="Search">
                    </form>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Data Stok</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Gudang</th>
                                            <th scope="col">Nama Sepatu</th>
                                            <th scope="col">Merek</th>
                                            <th scope="col">Ukuran</th>
                                            <th scope="col">Warna</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tb_stok as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->nama_gudang }}</td>
                                                <td>{{ $s->nama_sepatu }}</td>
                                                <td>{{ $s->merek }}</td>
                                                <td>{{ $s->ukuran }}</td>
                                                <td>{{ $s->warna }}</td>
                                                <td>{{ $s->harga_beli }}</td>
                                                <td>{{ $s->harga_jual }}</td>
                                                <td>
                                                    <a href="#"><button
                                                            class="btn btn-primary btn-sm edit-btn">Edit</button></a>
                                                    <a href="#"><button
                                                            class="btn btn-primary btn-sm delete-btn">Hapus</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
<!-- Your Custom JavaScript -->
<script>
    $(document).ready(function() {
        // Edit Button Click Event
        $('.edit-btn').click(function() {
            var id = $(this).data('id');
            // Redirect or do something with the ID
            console.log('Edit button clicked for ID:', id);
        });

        // Delete Button Click Event
        $('.delete-btn').click(function() {
            var id = $(this).data('id');
            // Confirm deletion and then redirect or send AJAX request
            if (confirm("Are you sure you want to delete this item?")) {
                // Redirect or send AJAX request
                console.log('Delete button clicked for ID:', id);
            }
        });
    });
</script>

</html>
