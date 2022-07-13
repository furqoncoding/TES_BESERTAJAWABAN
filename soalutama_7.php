<html>
<head>

</head>

<body>


    		<form method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table class="table-responsive table">

                    <tbody>
               
                    <tr>
                        <td style="width: 200px;"><label>Your Name</label></td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <input type="text" name="name" class="form-control">
                        </td>
                    </tr>
                    

                    <tr>
                        <td style="width: 200px;"><label>Jenis Kelamin</label></td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
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
    if( isset($_POST['name']) && isset($_POST['jenis_kelamin']) )
    {
       
       echo "Your Name Input : " . $_POST['name'];
       echo "<br>";
       echo "Jenis Kelamin : " . $_POST['jenis_kelamin'];

       echo "<br>";
       echo "<br>";

       date_default_timezone_set("Asia/Jakarta");
       $date_now = date("dmY");

       $value_before_sha256 = $date_now . $_POST['name'] . $_POST['jenis_kelamin'] . "ifabula";
       $value_after_sha256 = hash('sha256',$value_before_sha256);

       echo "before convert sha256 : " . "'" . $value_before_sha256 . "'";
       echo "<br>";
       echo "after convert sha256 : ". "'" . $value_after_sha256 . "'";


    }
?>

</body>
</html>