<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Church Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            🏛 Church Management
        </a>

        <div>

            <a class="btn btn-outline-light me-2" href="/">Home</a>

            <a class="btn btn-outline-light me-2" href="/about">About</a>

            <a class="btn btn-outline-light" href="/contact">Contact</a>

        </div>

    </div>
</nav>

<div class="container mt-5">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>