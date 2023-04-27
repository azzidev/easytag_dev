<?php 
    $url = $_SERVER['REQUEST_URI'];
    $name = pathinfo($url, PATHINFO_FILENAME); //file name without extension

    if($name == "index"){
        $indexClass = "active";
    }else if($name == "bar"){
        $barClass = "active";
    }else if($name == "products"){
        $productsClass = "active";
    }else if($name == "myhouse"){
        $houseClass = "active";
    }
?>
<!-- start of sidenav -->
<aside><div class="sidenav position-sticky d-flex flex-column justify-content-between">
    <a class="navbar-brand" href="index.php" class="logo">
        <img src="images/easytag.png" alt="">
    </a>
    <h1 class="text-primary mt-3 w-100">Ice Lounge Fest</h1>
    <!-- end of navbar-brand -->

    <div class="navbar navbar-dark my-4 p-0 font-primary">
        <ul class="navbar-nav w-100">
            <li class="nav-item <?=$indexClass?>">
                <a class="nav-link text-white px-0 pt-0" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item <?=$barClass?>">
                <a class="nav-link text-white px-0" href="bar.php">Bar</a>
            </li>
            <li class="nav-item <?=$productsClass?>">
                <a class="nav-link text-white px-0" href="products.php">Produtos</a>
            </li>
            <li class="nav-item <?=$houseClass?>">
                <a class="nav-link text-white">Configurações</a>
                <div id="drop-menu" class="drop-menu <?=$houseClass?>">
                    <a class="d-block text-primary" href="myhouse.php">informações da casa</a>
                </div>
            </li>
        </ul>
    </div>
</div></aside>
<!-- end of sidenav -->