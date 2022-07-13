<?php
session_start();
?>

<html>
<head>
</head>

<body>

<?php
    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"]))
    {
?>
    		<form method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table class="table-responsive table">

                    <tbody>
               
                    <tr>
                        <td style="width: 200px;"><label>Username</label></td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <input type="text" name="username" class="form-control">
                        </td>
                    </tr>




                    <tr>
                        <td style="width: 200px;"><label>Password</label></td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <input type="text" name="password" class="form-control">
                        </td>
                    </tr>
                    

                    

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-block">Proses</button>
                    </tr>
                    </tbody>

                </table>
        </form>
<?php
    }
?>
<?php
    if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
    {
?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="submit" name="logout" value="logout" />
    </form>

<?php
    }
?>


<?php
  if( isset($_POST['username']) && isset($_POST['password']) )
  {
    $filedata = file_get_contents('soalutama_9.json');
    $details = json_decode($filedata);   
    foreach($details as $data) {
        if($data->username === $_POST['username'] && $data->password === $_POST['password'])
        {
            if(count($data) > 0)
            {
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["password"] = $_POST['password'];

                echo '<meta http-equiv="refresh" content="1;url=soalutama_9.php">';
            }
        }
    }
  }
?>



<?php

    if(isset($_GET['logout'])) {
        logout();
    }

    function logout(){
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);

        echo '<meta http-equiv="refresh" content="1;url=soalutama_9.php">';
    }
?>


</body>
</html>