<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <style>
        .my {
            width: 100%;
            height: 35px;
            background-color: #BBB;
            border: 1px solid black;
        }

        .my-h {
            width: 100%;
            background-color: #BBB;
            border: 1px solid black;
        }
    </style>

    <title>Navbar Sample</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </nav>
        <br><br>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <br><br>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <br><br>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <button class="btn btn-outline-success" type="button">Main button</button>
                <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
            </form>
        </nav>
        <br><br>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </nav>
        <br><br>
        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
        </nav>

        <nav class="navbar navbar-dark bg-primary">
            <!-- Navbar content -->
        </nav>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <!-- Navbar content -->
        </nav>
        <br><br>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <br><br>
    </div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>