<!-- DOCTYPE html -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP connect MYSQL</title>
    </head>


    <body>
        
    <?php
    //Connect to MySQL
    $link = @mysqli_connect(
            'localhost:3306', //MySQL NAME
            'root', //UserName
            '0000', //Password
            'loginpage'; //
            )

    if( !$link ) {
        echo "Error!<br/> ";
        exit();

    }

    else{
        echo"MYSQL test Success! <br/>";
    }
    mysqli_close($link);  //關閉資料庫連接


    ?>



    </body>

</html>