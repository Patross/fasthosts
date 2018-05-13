<?php
include_once "includes/header.php";
?>

        <main>
            <section class="margin" id="whatis">
                <a href="whatis.php">What is a Top Level Domain?</a>
            </section>

            <form action="includes/tldsearch.php" method="post" id="tldsearch">
                <input type="text" name="domain" placeholder=".com, .net, .info">
                <input type="submit" name="submit" hidden>
            </form>

            <section id ='one-third-container'>
            <?php
            require_once 'includes/classes/tld.php';


            if(isset($_SESSION['domains']) && !empty($_SESSION['domains']))
            {

                $tld = new TLD();
                $tld->SetSuffix($_SESSION['domains']['suffix']);
                $tld->SetStatus($_SESSION['domains']['status']);
                $tld->SetPrice($_SESSION['domains']['price']);

            echo '<article class="one-third one-third-noscroll">
            <article class="title">
                <h3>';
                echo $tld->suffix;
                
                echo ' DEAL</h3>
            </article>
            <article class="image">
                <img src="img/computer.jpg" src="computer">
            </article>
            <article class="content">';
                echo $tld->status;
            echo'</article>
            <div class="center-button">
                <button class="button-buy">Buy Now! '; echo $tld->price ; echo'</button>
            </div>
        </article>';
            }
            ?>
            </section>
            <!-- <section id="one-third-container">

                <article class="one-third one-third-noscroll">
                    <article class="title">
                        <h3>DOMAIN X DEAL</h3>
                    </article>
                    <article class="image">
                        <img src="img/computer.jpg" src="computer">
                    </article>
                    <article class="content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                    </article>
                    <div class="center-button">
                        <button class="button-buy">Buy Now!</button>
                    </div>
                </article>


                <article class="one-third one-third-noscroll">
                    <article class="title">
                        <h3>DOMAIN X DEAL</h3>
                    </article>
                    <article class="image">
                        <img src="img/computer.jpg" src="computer">
                    </article>
                    <article class="content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                    </article>
                    <div class="center-button">
                        <button class="button-buy">Buy Now!</button>
                    </div>
                </article>


                <article class="one-third one-third-noscroll">
                    <article class="title">
                        <h3>DOMAIN X DEAL</h3>
                    </article>
                    <article class="image">
                        <img src="img/computer.jpg" src="computer">
                    </article>
                    <article class="content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                    </article>
                    <div class="center-button">
                        <button class="button-buy">Buy Now!</button>
                    </div>
                </article>

            </section>

            <section id="one-third-container" class="margin-small">

                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>
    
    
                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>
    
    
                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>
    
                </section>

                <section id="one-third-container" class="margin-small last">

                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>


                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>


                    <article class="one-third one-third-noscroll">
                        <article class="title">
                            <h3>DOMAIN X DEAL</h3>
                        </article>
                        <article class="image">
                            <img src="img/computer.jpg" src="computer">
                        </article>
                        <article class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quod suscipit accusantium iste exercitationem provident consequatur, ducimus excepturi explicabo corporis ipsa fuga magni veritatis cum sequi fugiat molestias rerum ex assumenda ratione? Distinctio quae accusamus quasi, quia rerum repudiandae ex?
                        </article>
                        <div class="center-button">
                            <button class="button-buy">Buy Now!</button>
                        </div>
                    </article>

            </section> -->
        </main>

        <!--START FOOTER  -->
        <footer>

            <section id="footer-contact">
                <!--START CONTACT DETAILS  -->
                <article>
                    123-456-789-000 <br>
                    21 Grove Street <br>
                    DE00 0ED <br>
                    Los Santos
                </article>
                <!--END CONTACT DETAILS  -->
            </section>


            <!--START QUICK LINKS  -->
            <section id="footer-links">
                <nav id="footer">
                    <a href="domains.html">Top Level Domains</a>
                    <a href="interest.html">Register Your Interest</a>
                    <a href="about.html">About Fasthosts</a>
                    <a href="sitemap.html">Site Map</a>
                </nav>
            </section>


            <!--END QUICK LINKS  -->
            <section id="legal">
                  Copyright &copy; Fasthosts &reg; 2018.
            </section>

        </footer>
        <!--END FOOTER  -->
        <script src="scripts/stylechange.js"></script>
    </body>
</html>