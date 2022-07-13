<!DOCTYPE>
<html>
    <head>


        
    </head> 
    <body>


            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table>
                    <tbody>
               
                    <tr>
                            <input type="number" name="value" class="form-control" placeholder="your value" style="width: 100%;">
                        
                    </tr>
                    </tbody>
                      
                </table>
                <br>
                <button type="submit" style="width: 100%">PROSES</button>
            </form>


            <?php
                if( isset($_POST['value']) )
                {
                    $value = $_POST['value'];

                    echo "Your insert:  $value <br><br><br>";

                    for($i=0;$i<=$value;$i++){  
                    for($j=5+$i-4; $j>=1; $j--){  
                        echo "* ";  
                    }  
                    echo "<br>";  
                    }  
                }
            ?>

    </body>
</html>
