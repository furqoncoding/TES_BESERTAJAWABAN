<?php
            $service_url = 'http://jsonplaceholder.typicode.com/posts';
            $curl = curl_init($service_url);
            
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_HEADER, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $curl_response = curl_exec($curl);
            curl_close($curl);

            $hasil = $curl_response;
            $hasil_convert = substr($hasil, -27520);


            if (file_put_contents('soalutama_3.json', $hasil_convert))
            {
                echo "CREATE soalutama_3.json HAS SUCCESS";

                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo $hasil_convert;
            }

?>