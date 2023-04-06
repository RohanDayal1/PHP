<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root");
    if(isset($_post['inloggen'])){
        $username = filter_input(INPUt_POST, "username", FILTER_SANITIZE_STRAING);
        $password = sha1($_POST['password']);
        $query = $db->prepare("SELECT * FROM gebruikers
        WHERE username = :user
        AND password = :pass");
        
        $query->bindParam("user", $username);
        $query->bindParam("pass", $password);
        $query->execute();
        session_start();

        if($query->rowCount() == 1) {
            echo "juiste gegevens!";
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['login'] = true;
            header('location: beveiligdepagina.php')
        } else {
            $_SESSION['username'] = "";
            $_SESSION['password'] = "";
            $_SESSION['login'] = false;
            echo "Onjuiste gegevens!";
        }

        echo"<br>";

        }
 }  catch(PDOException $e){
    die ("ERROR!:" . $e->getMessage());
 }
 ?>
 <form methode="post" action="">
    <label> username</label>
    <input type="text" name="username"><br>
    <label> password </label>
    <input type="password" name="password"><br>
    <input type="sumbit" name="inloggen" value="inloggen">
</form>