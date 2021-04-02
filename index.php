<?php

require 'includes/config.php';
$posts = ( object ) new Posts();
?>
<!-- Utvecklare: Fadi Hanna -->
<!DOCTYPE html>
<html lang='sv'>

<head>
    <title>Blogging</title>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'
        integrity='sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=='
        crossorigin='anonymous' />
    <link rel='stylesheet' type='text/css' href='css/_main.min.css?t=<?php echo time() ?>' />
</head>

<body>
    <!-- Lägg till Container inställningar -->
    <div id='container'>
        <!-- Lägg till Logotypens delen -->
        <div class='logobox'></div>
        <!-- Lägg ramen-->
        <div class='maintable'>

            <!-- Lägg till vänsterdelen -->
            <div class='maintable-left'>
                <!-- Lägg till navigationslänkar -->
                <div class='menu-left'>
                    <span onclick="window.location = 'index.php'">Startsida</span>
                    <?php

if ( isset( $_SESSION['email'] ) ) {
    echo "<span class='ajax' data-ajax='create'>Skapa inlägg</span>";
    echo "<span class='ajax' data-ajax='admin'>Administrera inlägg</span>";
    echo "<span class='ajax' data-ajax='logout'>Logga ut</span>";
} else {
    echo "<span class='ajax' data-ajax='register'>Registrering</span>";
}

?>
                </div>
            </div>
            <!-- Lägg till centerdelen -->
            <div class='maintable-center'>
                <!-- Här kommer innehållet av pages mappens filer -->
                <div class='ajaxRequest'></div>
                <!-- Lägg till de senaste 5 inlägg och de registrerade användare -->
                <div class='ajaxLoader'>

                    <?php

echo '<div>De senaste 5 inlägg</div>';
// Visa de senaste 5 inlägg
$posts->showPosts();
// Visa de registrerade användare
echo '<div>De registrerade användare</div>';
$posts->showUsers();

?>
                </div>
            </div>
            <!-- Lägg till högerdelen -->
            <div class='maintable-right'>
                <!-- Sökdelen -->
                <div class='searchbox2'>
                    <form action='search' method='post'>
                        Sök här efter inlägg<br>
                        <input type='text' name='word' id='word' placeholder='Sök här' required />
                        <input type='submit' name='searchbtn' value='Sök' class='search' />
                    </form>
                </div>
                <?php if ( !isset( $_SESSION['email'] ) ) {
    // Visa logga in delen
    echo '<div class="loginbox2">
                            Logga in<br>
                            <form action="login" method="post">
                            Användarnamn:<br>
                            <input type="text" id="usrtxt" name="usrtxt" placeholder="Usernamne" required><br>
                            Lösenord:<br>
                            <input type="password" name="passtxt" id="usrpass" placeholder="Password" required><br><br>
                            <input type="submit" name="loginbtn" class="login" value="Logga in">
                        </form>
                        </div>';
}
?>
            </div>

        </div>
        <!-- Visa sidfoten -->
        <div class='footer'>Skapad av Fadi</div>

    </div>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='js/loadAll.min.js?t=<?php echo time() ?>'></script>
</body>

</html>