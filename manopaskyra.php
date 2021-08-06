<?php
if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']);
  
    echo '<form action="manopaskyra.php" method="get">
    <button type="submit" name="atsijungti">Atsijungti</button>
    </form>';

    if(isset($_GET["atsijungti"])) {
        setcookie("prisijungti",  "", time() - 3600, "/");
        setcookie("teises",  "", time() - 3600, "/");
        header("Location: login.php");

    }

} else {
    header("Location: login.php");
}
?>