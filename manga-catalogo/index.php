<?php 

    include 'header.php';

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

            <? include 'manga-icon.php'?>

        </div>

<!-- manhwas -->

        <h2 id="manhwa">MANHWAS</h2>

        <div id="manga_container">

            <div class="manga_icon">
                <img src="assets/noblese-pin.png">
                <div class="manga_desc">
                    <h3>Noblese</h3>
                    <p>
                        Raizel, um nobre poderoso, protege seus amigos enquanto se adapta ao mundo moderno.
                    </p>
                    <a href="reader-berserk.html">Leia aqui</a>

                </div>
            </div>

            <div class="manga_icon">
                <img src="assets/solo-pin.png">
                <div class="manga_desc">
                    <h3>Solo Leveling</h3>
                    <p>
                        Sung Jin-Woo, um caçador fraco, ganha poderes únicos e luta para se tornar o mais forte.
                    </p>
                    
                    <a href="reader-berserk.html">Leia aqui</a>
                    
                </div>
            </div>

            <div class="manga_icon">
                <img src="assets/boxer-pin.png">
                <div class="manga_desc">
                    <h3>The boxer</h3>
                    <p>
                        Yu, um jovem com talento extraordinário, enfrenta a brutalidade do boxe profissional.
                    </p>
                    <a href="reader-berserk.html">Leia aqui</a>

                </div>
            </div>
        </div>
    </section>
    </main>


<?php 

    include 'footer.php';
?>