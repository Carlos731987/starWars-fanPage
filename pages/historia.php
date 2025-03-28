<?php
include('../pages/logica-title.php');
include("../pages/header.php");
$marca = 0;
switch ($_GET['pagina']) {
    case "home":
        $marca = 1;
        break;
    case "historia":
        $marca = 2;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/body-historia.php";
        $footerStorage = "../pages/footer.php";
        break;
    case "personajes":
        $marca = 3;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/personajes.php";
        $footerStorage = "../pages/footer.php";
        break;
    case "naves":
        $marca = 4;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/naves.php";
        $footerStorage = "../pages/footer.php";
        break;
    case "planetas":
        $marca = 5;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/planetas.php";
        $footerStorage = "../pages/footer.php";
        break;
    case "comunidad":
        $marca = 6;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/comunidad.php";
        $footerStorage = "../pages/footer.php";       
        break;
    default:
        $marca = 2;
        $headerStorage = "../pages/header.php";
        $bodyStorage = "../pages/historia.php";
        $footerStorage = "../pages/footer.php";
}
switch ($marca) {
    case 1:     
        include("../pages/home.php");   
        break;
    case 2:
        include("../pages/header.php");
        include("../pages/body-historia.php");
        include("../pages/footer.php");
        break;
    case 3:
        include("../pages/header.php");
        include("../pages/personajes.php");
        include("../pages/footer.php");
        break;
    case 4:
        include("../pages/header.php");
        include("../pages/naves.php");
        include("../pages/footer.php");
        break;
    case 5:
        include("../pages/header.php");
        include("../pages/planetas.php");
        include("../pages/footer.php");
        break;
    case 6:
        include("../pages/header.php");
        include("../pages/comunidad.php");
        include("../pages/footer.php");        
        break;
    default:
        include("../pages/header.php");
        include("../pages/historia.php");
        include("../pages/footer.php");
}
?>