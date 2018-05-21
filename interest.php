<?php
include_once "includes/header.php";
?>

        <main>
        <a href="editrequest.php">Edit your request</a>

            <?php if($_GET['mode']=='new')
                {
                    echo '<form action="includes/interest.inc.php?mode=new" method="post" id="domainsearch">';
                }
                else if($_GET['mode']=='alter')
                {
                    echo '<form action="includes/interest.inc.php?mode=alter" method="post" id="domainsearch">';
                }
            ?>
                <input id="firstName" name="firstName" type="text" placeholder="first name"><br><br>
                <input type="text" name="lastName" placeholder="last name"><br><br>
                <input id="email" name="email" type="text" placeholder="Email"><br><br>
                <select name="domain" id="">
                    <option value="COM">.COM</option>
                    <option value="NET">.NET</option>
                    <option value="ORG">.ORG</option>
                    <option value="TECH">.TECH</option>
                </select><br><br>
                <input type="number" name="telephone"><br><br>
                <input id="submit" type="submit" name="submit" value="Search" class="button-medium button-buy">
            </form>
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