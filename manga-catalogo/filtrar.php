<?php


if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [];
}

//faz o get com o filtro inputado
$filtro = $_GET['filtro'] ?? "";

$mangasFiltrados = [];


//se o filtro nao estiver vazio atribui os mangas filtrados ao array
if ($filtro !== '') {
    foreach ($_SESSION['catalogo'] as $manga) {
        if($filtro == $manga['titulo'] || $filtro == $manga['genero']){
            $mangasFiltrados[] = $manga;
        }
    }
} else {
    $mangasFiltrados = $_SESSION['catalogo'];
}
?>


<form method="get" action="">
    <input type="text" name="filtro" placeholder="Buscar por título ou gênero">
    <button type="submit">Filtrar</button>
</form>