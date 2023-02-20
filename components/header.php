<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php $baseURL = 'http://localhost/finderorg_new/'; ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#">Finder Org</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0 d-none d-lg-block" href="<?php echo $baseURL; ?>">Finder Org</a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $baseURL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseURL; ?>about.php" rel="noopener noreferrer">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseURL; ?>blog.php" rel="noopener noreferrer">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseURL; ?>contact.php" rel="noopener noreferrer">Contact</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <!-- <form role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form> -->
                </div>
            </div>
        </div>
    </nav>