<?php
include_once "includes/header.php";
?>

        <main>
        <a href="editrequest.php">Edit your request</a>

            <?php if(isset($_GET['mode']) && $_GET['mode']=='new')
                {
                    echo '<form action="includes/interest.inc.php?mode=new" method="post" id="domainsearch">';
                }
                else if(isset($_GET['mode']) && $_GET['mode']=='alter')
                {
                    echo '<form action="includes/interest.inc.php?mode=alter" method="post" id="domainsearch">';
                }
            ?>
                <input
                <?php 
                    if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                        echo "value=".$_SESSION['emailtoalter']['first_name'];
                    }
                ?>
                id="firstName" name="firstName" type="text" placeholder="first name" autocomplete="off"><br><br>


                <input
                <?php 
                    if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                        echo "value=".$_SESSION['emailtoalter']['last_name'];
                    }
                ?>
                type="text" name="lastName" placeholder="last name" autocomplete="off"><br><br>
                <input
                <?php 
                    if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                        echo "value=".$_SESSION['emailtoalter']['email_address'];
                    }
                ?>
                 id="email" name="email" type="text" placeholder="Email" autocomplete="off"><br><br>
                <select name="domain" id="">
                    <option
                    <?php 
                        if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                            if($_SESSION['emailtoalter']['domain_id']==2)
                            {
                                echo "selected=".$_SESSION['emailtoalter']['domain_id'];
                            }
                        }
                    ?>
                    value=".COM">.COM
                    </option>

                    <option                  
                    <?php 
                        if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                            if($_SESSION['emailtoalter']['domain_id']==3)
                            {
                                echo "selected=".$_SESSION['emailtoalter']['domain_id'];
                            }
                        }
                    ?>
                    value=".NET">.NET</option>
                    <option                 
                    <?php 
                        if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                            if($_SESSION['emailtoalter']['domain_id']==4)
                            {
                                echo "selected=".$_SESSION['emailtoalter']['domain_id'];
                            }
                        }
                    ?> 
                    value=".ORG">.ORG</option>
                    <option                     
                    <?php 
                        if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                            if($_SESSION['emailtoalter']['domain_id']==5)
                            {
                                echo "selected=".$_SESSION['emailtoalter']['domain_id'];
                            }
                        }
                    ?> 
                    value=".TECH">.TECH</option>
                </select><br><br>
                <input               
                <?php 
                    if(isset($_SESSION['emailtoalter'])&&!empty($_SESSION['emailtoalter'])){
                        echo "value=".$_SESSION['emailtoalter']['telephone'];
                    }
                ?>
                 type="number" name="telephone" autocomplete="off"><br><br>
                <input id="submit" type="submit" name="submit" value="Submit" class="button-medium button-buy">
            </form>
            <?php
            if(isset($_GET['a']) && $_GET['a'] == 'error' ){
                echo "YOU MADE AN ERROR!!!!!!!!!!!!!!!!!!!!!!! MAKE SURE YOU PUT ALL THE DATA IN!!!!!!!";
            }
            ?>
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
        <script src="scripts/validate.js"></script>
        <script src="scripts/stylechange.js"></script>
    </body>
</html>