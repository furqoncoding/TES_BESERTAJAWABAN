        <?php
            for ($x = 50; $x <= 100; $x+=5) {

                // echo "The number is: $x <br>";
                if($x <= 60)
                {
                    echo "$x KURANG <br>";
                }
                if($x > 60 && $x <= 70)
                {
                    echo "$x CUKUP <br>";
                }
                if($x > 70 && $x <= 80)
                {
                    echo "$x BAIK <br>";
                }
                if($x > 80)
                {
                    echo "$x LUAR BIASA <br>";
                }

            }
        ?>
