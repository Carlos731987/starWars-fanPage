<?php
$page = $_GET['pagina']; // Define la variable que indica la página actual

switch ($page) {    
    case "home":
        $title = "Star Wars - Una Galaxia Muy Lejana";
        $bodyClass = "body-index";        
        break;
    case "historia":
        $title = "Star Wars | Historia";
        $bodyClass = "body-historia";        
        break;
    case "personajes":
        $title = "Star Wars | Personajes";
        $bodyClass = "body-personajes";
        break;
    case "naves":
        $title = "Star Wars | Naves Espaciales";
        $bodyClass = "body-naves";
        break;
    case "planetas":
        $title = "Star Wars | Planetas y Lugares";
        $bodyClass = "body-planetas";
        break;
    case "comunidad":
        $title = "Star Wars | Comunidad";
        $bodyClass = "body-comunidad";
        break;
    default:
        $title = "Star Wars | Historia";
        $bodyClass = "body-historia";
}
?>