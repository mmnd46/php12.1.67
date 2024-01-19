<html>
    <body>
        <?php
        session_start();
        setcookie ("username" , $_POST["username"], time()+3600);
        echo "เรารับ Cookies แล้วจ้าาา";
        ?>

        <form action='cookie-logout.php' method='POST'>
            <input type='submit' value='Logout'>
    </form>
    </body>
</html>
