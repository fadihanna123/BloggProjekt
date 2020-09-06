<?php

    class Posts 
    {

        protected $db;
    // Fixar inställningar för anslutning till databas
        public function __construct() {
            $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE) or die("Det finns okänt problem - Var vänlig kontakta administratören.");
        }

        // Visa de senaste 5 inlägg
        public function showPosts() {
            $sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 5";
            $result = $this->db->query($sql);
            if ($num = mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                    <ul>
                    <li>" . $row['titel'] . "<br><i>" . $row['post'] .
                    "</i><br> Av: <b>" . $row['author'] . "</b>, " . $row['date'] . "</li>
                    </ul><br>
                    ";
                }
            } else {
                echo "Inga inlägg hittills.";
            }
        }

        // Visa egna inlägg med både knapparna Ändra och Ta bort
        public function Myposts() {
            $id = $this->showId();
            $sql = "SELECT * FROM posts WHERE usrid=$id";
            $result = $this->db->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<div id='posts'>
                        <ul><li> " . $row['titel'] . "<br><i>" . $row['post'] . "</i><br>Av: " . $row['author'] . ", " . $row['date'] . " 
                        <form action='edit'>
                            <input type='hidden' name='postId' value='{$row['id']}' />
                            <input type='submit' class='change' value='Ändra'> &nbsp;
                        </form>
                        <form action='delete'>
                            <input type='hidden' name='postId' value='{$row['id']}'>
                            <input class='delete' type='submit' value='Radera'>
                        </form>
                        <br></li></div></ul>";
                }
            } else {
                echo "Du har inga inlägg.";
            }
        }


        // Hämta alla data från databas enligt id och där id är argument
        public function getInfo($id)
        {
            $sql = "SELECT * FROM posts WHERE id=$id";
            $result = $this->db->query($sql);
            $row = mysqli_fetch_array($result);
            return $row;
        }
        
        // Gör ta bort inlägg processen
        public function Delete($id) {
            $sql = "DELETE FROM posts WHERE id=$id";
            if ($this->db->query($sql)) {
                echo "Klart!";
            } else {
                echo "Fel...";
            }
        }

        // Gör ändra inlägg processen
        public function Edit($title, $post, $id) 
        {
            $sql = "UPDATE posts SET titel='{$title}', post='{$post}' WHERE id='{$id}'";
            if ($this->db->query($sql)) {
                print 'Klart.';
            } else {
                print '<div id="error">Något gick fel.</div>';
            }
        }

        // Hämta fullständigt namn från databas enligt id som kommer från funktionen showid
        public function info() 
        {
            $id = $this->showId();
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = $this->db->query($sql);
            $row = mysqli_fetch_array($result);
            return $row['fullnamn'];
        }

        // Hämta användare id från databas enligt id som kommer från session
        public function showId() 
        {
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
            $sql = "SELECT id FROM users WHERE email='$email';";
            $result = $this->db->query($sql);
            $row = mysqli_fetch_array($result);
            return $row['id'];
        }

        // Leta efter sökordet i databasen
        public function search($ord) 
        {
            $sql = "SELECT * FROM posts WHERE post LIKE '%$ord%' OR titel LIKE '%$ord%' OR author LIKE '%$ord%';";
            $result = $this->db->query($sql);
            $num = mysqli_num_rows($result);
            if ($num > 0)
            {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<br><ul><li>" . $row['titel'] . "<br><u>" . $row['post'] .
                    "</u><br>Av: " . $row['author'] . ", " . $row['date'] . "</li></ul><br>";
                }
            } 
            else 
            {
                echo "<br>Inga resultat hittades!<br>";
            }
        }

        // Visa användare inlägg enligt id som argument
        public function showPost($id) 
        {
            $sql = "SELECT * FROM posts WHERE usrid=$id;";
            $result = $this->db->query($sql);
            if (!isset($_SESSION['email']))
            {
                echo "<script>alert('Du måste vara inloggad för att se denna sida');</script>";
                echo '<meta http-equiv="refresh" content="1; url=index.php">';
            }
            if ($num = mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result))
                {
                    echo "<div id='posts'>
                        <ul><li> " . $row['titel'] . "<br><i>" . $row['post'] . "</i><br>Av: " . $row['author'] . ", " . $row['date'] . " 
                        <br></li></div></ul>";
                }
            } else {
                echo "Inga inlägg hittills.";
            }
        }

        // Visa alla de registrerade användare
        public function showUsers() 
        {
            $sql = "SELECT * FROM users";
            $result = $this->db->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result))
                {
                        echo "
                        <ul class='list'>
                            <li><a class='ajax' id='doit' data-ajax='showposts' data-post='{$row['id']}'>$row[username]</a></li>
                        </ul>";
                }
            } 
            else {
                echo "Inga användare regisrerade hittills!";
            }
        }

        // Gör registreringsprocessen genom att spara användaredata i databasen
        public function doregister($fullname, $username, $password, $email) {
            $now = date('Y-m-d H:i:s', time());

            $sql = "INSERT INTO users (fullnamn, username, password, email, date) VALUES('$fullname', '$username', '$password', '$email', '$now')";
            if ($this->db->query($sql)) {
                echo 'Tack för registrering<meta http-equiv="refresh" content="2; url=index.php">';
            } else {
                echo mysqli_error($this->db);
                echo "<div class='error'>Ett okänt fel dök upp. Var vänlig kontakta administratören.</div>";
            }
        }

        // Gör lägga till processen genom att spara dessa data i databasen
        public function Add($author, $title, $content, $usrid) {
            $now = date('Y-m-d H:i:s', time());

            $sql = "INSERT INTO posts (titel,post,author,date,usrid) VALUES ('$title', '$content', '$author', '$now','$usrid');";
            if ($this->db->query($sql)) {
                echo 'Dina data har lagts till. <span href="admin" class="link ajax" data-ajax="admin">Gå tillbaka</span>';
            } else {
                echo mysqli_error($this->db);
                echo "<div class='error'>Ett okänt fel dök upp. Var vänlig kontakta administratören.</div>";
            }
        }
        
        // Kontrollera om användarnamet och lösenordet finns i databas eller inte
        public function check($username, $password) {
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $result = $this->db->query($sql);
            $num = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if ($num > 0) 
            {
                echo '<div class="main">Du blev inloggad</div><meta http-equiv="refresh" content="1; url=index.php">';
                $_SESSION['email'] = $row['email'];
            } 
            else 
            {
                echo "<div class='error'>Det finns något fel i användarnamnet/lösenordet.</div>";
            }
        }

    }

?>