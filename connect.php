<html>
    <body>
        <?php echo $_POST["login"]; ?> <br/>
        <?php echo $_POST["password"]; ?> <br/>
        <?php echo $_POST["language"]; ?> <br/>
        <?php echo $_POST["gender"]; ?> <br/>

        <?php
        if(isset($_POST["interest1"])){
            echo $_POST["interest1"];
        }
        if(isset($_POST["interest2"])){
            echo $_POST["interest2"];
        }
        if(isset($_POST["interest3"])){
            echo $_POST["interest3"];
        }
        ?><br>
        <?php echo $_POST["comment"]; ?><br>
    </body>
</html>
