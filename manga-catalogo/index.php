<?php 

    include 'header.php';


    if(!isset($_SESSION)){
        session_start();
    }


    //para resetar o site, tire o comentario da linha abaixo e recarregue a pagina
    //$_SESSION = array();

    //inicia o array catalogo se nao exisitr
    if (!isset($_SESSION['catalogo'])) {
        $_SESSION['catalogo'] = [];
    } 

?>

<main>

<!--banner-->

    <div id="home" style="background-image: url('assets/berserk-thumbnail.png');">
        <div class="featured_manga">
        </div>
    </div>
        
<!--mangas-->

    <section>
        <h2 id="manga">MANGÁS</h2>
        <div id="manga_container">
            <?php 
            //confere se o array dos mangas filtrados esta vazio
            if (!empty($mangasFiltrados)): ?>
                <?php
                //for each para passar mostrar as infos de cada manga do array 
                foreach ($mangasFiltrados as $manga): ?>
                    <div class="manga_icon">
                        <img src="<?php echo $manga['url_imagem'] ?>">
                        <div class="manga_desc">
                            <h3><?php echo $manga['titulo'] ?></h3>
                            <p>
                                Gênero: <?php echo $manga['genero'] ?>
                            </p>
                            <a href="detalhes.php?id=<?php echo $manga['id'] ?>">Saiba mais</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum mangá encontrado com o filtro "<?php echo $filtro ?>"</p>
            <?php endif; ?>
        </div>
    </section>
    </main>


<?php 

    include 'footer.php';
?>