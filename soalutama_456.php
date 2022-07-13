<html>
<head>
	
</head>

<body>

<?php
	$filedata = file_get_contents('soalutama_3.json');
	$details = json_decode($filedata);
	// print_r($details);

?>

<div>
            
<div>
    <div>
        

        <div>
            <table>
                <thead>
                <tr>
                    
                    <th style="width: 40px;"><center>No</center></th>
                    <th><center>Title</center></th>
                    <th><center>Body</center></th>
                    <th><center>Action</center></th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    // foreach($details as $data) {
                    foreach(array_slice($details, 0, 10) as $data) {

                            ?>
                            <tr>
                                
                            <td style="width: 10%"><center><?php echo $no; ?></center></td>
                            
                            
                            <td style="width: 25%"><center><?php echo $data->title; ?></center></td>
                            <td style="width: 50%"><center><?php echo $data->body; ?></center></td>
                            
                            <td><center><a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $data->id; ?>"> HAPUS </a></center></td>

                            </tr>
                            <?php
                            $no++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>












<?php
    if( isset($_GET['id']) )
    {
        $data = file_get_contents('soalutama_3.json');

        $json_arr = json_decode($data, true);

        $arr_index = array();
        foreach ($json_arr as $key => $value) {
            if ($value['id'] == $_GET['id']) {
                $arr_index[] = $key;
            }
        }

        foreach ($arr_index as $i) {
            unset($json_arr[$i]);
        }

        $json_arr = array_values($json_arr);
        if(file_put_contents('soalutama_3.json', json_encode($json_arr)))
        {
            echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=soalutama_456.php\">");
        }

    }
?>





</body>
</html>