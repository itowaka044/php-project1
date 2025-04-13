<?php 

    include 'header.php';


    
    session_start();


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
            //foreach para mostrar as infos do array catalogo
            foreach($_SESSION['catalogo'] as $manga): ?>
                <div class="manga_icon">
                    <img src="<?php echo $manga['url_imagem'] ?>">
                    <div class="manga_desc">
                        <h3><?php echo $manga['titulo'] ?></h3>
                        <p>
                            <?php echo $manga['desc'] ?>
                        </p>
                        <a href="detalhes.php?id=<?php echo $manga['id'] ?>">Saiba mais</a>

                    </div>
                </div>
            <?php endforeach; ?>   
        </div>
    </section>
    </main>


<?php 

    include 'footer.php';
?>