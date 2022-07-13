<html>
<head>
	<style type="text/css">
    a.popup_edit-link {
        padding:17px 0;
        text-align: center;
        margin:7% auto;
        position: relative;
        width: 300px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.popup_edit-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    
    #popup_edit {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_edit:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    @media (min-width: 768px){
        .popup_edit-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_edit-container {
            width:100%;
        }
    }
    .popup_edit-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_edit-close {
        position: absolute;
        top:3px;
        right:3px;
        background-color: #333;
        padding:7px 10px;
        font-size: 20px;
        text-decoration: none;
        line-height: 1;
        color:#fff;
    }

    .popup_edit-form {
        margin:10px auto;
    }
        .popup_edit-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_edit-form .input-group {
            margin:10px auto;
        }
            .popup_edit-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_edit-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_edit-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_edit-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_edit-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>

</head>

<body>

<?php
	$filedata = file_get_contents('soalutama_1.json');
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
                    <th><center>Photo</center></th>
                    <th><center>Name</center></th>
                    <th><center>Harga</center></th>
                    <th><center>Action</center></th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($details as $data) {

                            ?>
                            <tr>
                                
                            <td><center><?php echo $no; ?></center></td>
                            
                            
                            <td><center><img alt="No Image" src="<?php echo $data->image; ?>" width="150" height="70"></center></td>
                            <td><center><?php echo $data->name; ?></center></td>
                            <td><center><?php echo "Rp " . number_format($data->price,2,',','.'); ?></center></td>
                            
                            <td><center><a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $data->id; ?>&&#popup_edit"> EDIT </a></center></td>

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













<div class="popup_edit-wrapper" id="popup_edit">
    <div class="popup_edit-container">

    		<form method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $_GET['id']; ?>">
                <table class="table-responsive table">

                    <tbody>
               
                    <tr>
                        <td style="width: 200px;"><label>Name Update</label></td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <input type="text" name="name_update" class="form-control">
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
 
    </div>



            <a class="popup_edit-close" href="#closed">X</a>
    </div>
</div>






<?php
	if( isset($_GET['id']) && isset($_POST['name_update']) )
    {
    	$jsonString = file_get_contents('soalutama_1.json');
		$data = json_decode($jsonString, true);

		foreach ($data as $key => $entry) {
		    if ($entry['id'] == $_GET['id']) {
		        $data[$key]['name'] = $_POST['name_update'];
		    }
		}

		$newJsonString = json_encode($data);
		if (file_put_contents('soalutama_1.json', $newJsonString))
		{
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=soalutama_2.php\">");
		}


    }
?>


</body>
</html>