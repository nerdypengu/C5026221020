<html>

<head>
    <title>Rounded Corners</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Simple Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="bg-light p-3 rounded">
                    <h5>Sidebar</h5>
                    <div class="row-pd-3 bg-secondary" style="border-radius: 8px">
                        <a href="Try it yourself 1.html" class="text-white">Rounded</a>
                    </div>
                    <div class="row-pd-3">
                        <a href="Try it yourself 2.html">Circled</a>
                    </div>
                    <div class="row-pd-3">
                        <a href="Try it yourself 3.html">Thumbnail</a>
                    </div>
                    <div class="row-pd-3">
                        <a href="Try it yourself 4.html">Aligning Images</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Main Content -->
                <div class="text-center">
                    <h2>Surfing Journey</h2>
                    <p>
                        Surfing is a surface water sport in which an individual, a surfer
                        (or two in tandem surfing), uses a board to ride on the forward
                        section, or face, of a moving wave of water, which usually carries
                        the surfer towards the shore. Waves suitable for surfing are
                        primarily found on ocean shores, but can also be found in standing
                        waves in the open ocean, in lakes, in rivers in the form of a
                        tidal bore, or in wave pools.
                    </p>

                    <img src="assetTIY/surfing2.jpg" class="rounded padding-top" alt="Foto 1" width="300"
                        height="250" />
                    <img src="assetTIY/foto 1.png" class="rounded" alt="Foto 1" width="300" height="250" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
