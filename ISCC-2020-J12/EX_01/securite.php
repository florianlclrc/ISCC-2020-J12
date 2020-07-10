<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>

    <?php
    function connect_to_database(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "basetest01";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    $pdo = connect_to_database();

    $query = $pdo->query ("SELECT * FROM utilisateur WHERE login ='". $_POST['login'] ."' AND password = '" . $_POST['password'] ."'");
    $execute = $qry->fetch();
    echo var_dump($execute);
        if($execute !=false) {
            $_SESSION['id'] = $_POST['login'];
            setcookie('id', $_POST['login']);
            header('Location: mini-site-routing.php?page=1');
        }
        else{
            echo "<p>Mauvais couple identifiant/mot de passe.</p>";
            echo "<p>Lien conseillé : connexion.php?page=connexion</p>";
        }
    
    $req = $pdo->prepare("update utilisateur set login = admin");
    $req->execute();

    $req = $pdo->prepare("update utilisateur set password = 2020");
    $req->execute();

    $sql = "INSERT INTO utilisateur('id','login','password','img-path')
    VALUES('8','T-shirt noir','T-shirt coton de couleur noire','15.50','10')";
$sql=$pdo->prepare(sql);
$sth->execute();

?>