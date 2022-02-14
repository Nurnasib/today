
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nur E Nasib</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container ">
        <a href="" class="navbar-brand">Nur E Nasib</a>
        <ul class="navbar-nav">
            <li><a href="action.php?pages=product" class="nav-link">Home</a></li>
            <li><a href="action.php?pages=home" class="nav-link">Prime</a></li>
            <li><a href="action.php?pages=user" class="nav-link">All User</a></li>
            <li><a href="action.php?pages=upload" class="nav-link">Upload</a></li>
            <li><a href="action.php?pages=search" class="nav-link">Search</a></li>
            <li class="dropdown">
                <a href="action.php?pages=register" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
            <li>

                    <form action="action.php" method="POST">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="search"/>
                            <div class="input-group-append">
                                <button type="submit" name="search_btn" class="btn btn-success">
                                    <i class="fa fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

            </li>
        </ul>
    </div>
</nav>
<?php } else { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container ">
            <a href="" class="navbar-brand">Nur E Nasib</a>
            <ul class="navbar-nav">
                <li><a href="action.php?pages=product" class="nav-link">Home</a></li>
                <li><a href="action.php?pages=login" class="nav-link">Login</a></li>
                <li>

                    <form action="action.php" method="POST">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="search"/>
                            <div class="input-group-append">
                                <button type="submit" name="search_btn" class="btn btn-success">
                                    <i class="fa fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </li>
            </ul>
        </div>
    </nav>
<?php } ?>
