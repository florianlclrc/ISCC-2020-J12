<!DOCTYPE html>
    <title> mini-site-routing </title>
    
    <html>
        <nav>
            <a href="http://localhost:8888/ISCC-2020-J09/EX_01/accueil.php?page=Accueil">Accueil</a>; <br>
            <a href="http://localhost:8888/ISCC-2020-J09/EX_01/page1.php?page=Page2">Page 1</a>; <br>
            <a href="http://localhost:8888/ISCC-2020-J09/EX_01/page2.php?page=Page3">Page 2</a>;<br>
            <a href="http://localhost:8888/ISCC-2020-J09/EX_01/connexion.php?page=Page4">Connexion</a>
            <a href="http://localhost:8888/ISCC-2020-J09/EX_01/admin.php?page=Admin">Admin</a>
        </nav>
    
        <?php
            if ($_GET ["page"]== 1) {
                echo "<h1>Accueil !</h1>";
            } 
            else if ($_GET ["page"]== 2) {
                echo "<h1>Page 2 !</h1>";
            } 
            else if ($_GET ["page"]== 3) {
                echo "<h1>Page 3 !</h1>";
            }
            else if ($_GET ["page"]== 4) {
                echo "<h1>Connexion !</h1>";
            }
        ?>
            <?php
            if (isset($_SESSION['id'])== true) {
                ?><a href="http://localhost:8888/ISCC-2020-J09/EX_01/admin.php">Admin</a>;
            }
    </html>