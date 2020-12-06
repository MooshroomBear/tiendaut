<?php
$nombre = $_POST["nombre"];
$img = $_POST["img"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <style>

        body {
            margin:0;
            padding:0;
        }

    #header{
        width:100%;
        height:60px;
        background:rgba(60,60,60,255);
        vertical-align:middle;
    }
    #imgHeader, #nameHeader {
        float:right;
    }

    </style>
</head>
<body>
    <div id="header">
        <div id="imgHeader">
            <img src="<?php echo $img;?>" width="60" height="60" >
        </div>
        <div id="nameHeader" style="color:#FFFFFF;margin-top:20px;margin-right:15px;">
        <?php echo $nombre;?>
    </div>
    </div>
</body>
</html>