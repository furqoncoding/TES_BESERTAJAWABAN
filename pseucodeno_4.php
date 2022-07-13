        <?php
            for ($x = 2000; $x <= 2050; $x++) {

                $id = strval($x);    

                $id_convert = substr($id, -2, -1);
                $end= substr($id, -1);

                    if($end == "0")
                    {
                        $val_main = "";
                        $value_ending = "";
                    }
                    if($end == "1")
                    {
                        $val_main = "satu";
                        $value_ending = "";
                    }
                    if($end == "2")
                    {
                        $val_main = "dua";
                        $value_ending = "";
                    }
                    if($end == "3")
                    {
                        $val_main = "tiga";
                        $value_ending = "";
                    }
                    if($end == "4")
                    {
                        $val_main = "empat";
                        $value_ending = "";
                    }
                    if($end == "5")
                    {
                        $val_main = "lima";
                        $value_ending = "";
                    }
                    if($end == "6")
                    {
                        $val_main = "enam";
                        $value_ending = "";
                    }
                    if($end == "7")
                    {
                        $val_main = "tujuh";
                        $value_ending = "";
                    }
                    if($end == "8")
                    {
                        $val_main = "delapan";
                        $value_ending = "";
                    }
                    if($end == "9")
                    {
                        $val_main = "sembilan";
                        $value_ending = "";
                    }

                ////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////

                if($id_convert == "1")
                {
                    if($end == "0")
                    {
                        $val_main = "sepuluh";
                        $value_ending = "";
                    }
                    else if($end == "1")
                    {
                        $val_main = "sebelas";
                        $value_ending = "";
                    }
                    else
                    {
                        $value_ending = "belas";
                    }
                }

                ////////////////////////////////////////////////////////////////

                if($id_convert == "0")
                {
                    $value_puluhan = "";
                }
                if($id_convert == "1")
                {
                    $value_puluhan = "";
                }
                if($id_convert == "2")
                {
                    $value_puluhan = "dua puluh";
                }
                if($id_convert == "3")
                {
                    $value_puluhan = "tiga puluh";
                }
                if($id_convert == "4")
                {
                    $value_puluhan = "empat puluh";
                }
                if($id_convert == "5")
                {
                    $value_puluhan = "lima puluh";
                }

                ////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////






                echo $x." = Dua ribu " . $value_puluhan . " ". $val_main . " " . $value_ending . "<br>";
                

            }
        ?>
