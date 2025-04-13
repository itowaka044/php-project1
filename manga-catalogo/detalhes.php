<?php
include 'header.php';
?>

<?php


session_start();

//foreach pra atribuir o manga correto para a variavel $manga(esta variavel vai ser utilizada na pagina inteira)
foreach($_SESSION['catalogo'] as $mangaAux){
    if($_GET['id'] == $mangaAux['id']){
        $manga = $mangaAux;
    }
}

?>


<main>
    <div id="detalhes_sec">
            <div class="det_esquerda">
                <img src="<?php echo $manga['url_imagem'] ?>" alt="">
            </div>

            <div class="det_direita">
                <h1><?php echo $manga['titulo']?></h1>
                <br>
                <h2>Genero: <?php echo $manga['genero']?></h2>
                <br>
                <p><?php echo $manga['desc']?> </p>
                <br>
                
            </div>
    </div>

</main>



<?php
include 'footer.php';
?>