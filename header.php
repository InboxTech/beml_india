<?php
class Header {
    public function includeHeader($title, $parentPath) {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="'.$parentPath.'public/css/style.css">
                <link rel="stylesheet" href="'.$parentPath.'public/bootstrap/bootstrap.min.css">
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav w-100 justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#">Home <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Corporate <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Business <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Facilities <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Inverter <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Suppliers <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Vigilance <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Info Desk <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">Make In India <i class="bi bi-caret-down-fill"></i></a></li> 
                            <li class="nav-item"><a class="nav-link" href="#">CMDs Massage <i class="bi bi-caret-down-fill"></i></a></li> 
                        </ul>
                    </div>
                </nav>
        ';
    }
}
?>
