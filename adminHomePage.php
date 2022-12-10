<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            

            $link = mysqli_connect("localhost", "root", "", "formdb");

            if($link == false){
                die("ERROR: Could not connect. ". mysqli_connect_error());
            }

            $sql = "select * from userinfo";

            $query = mysqli_query($link, $sql);

            //$row = mysqli_fetch_array($query);

            while ($row = mysqli_fetch_array($query)) {
                $firstname = $row['firstName'];
                // echo"<h1>$firstname </h1>";
                // echo "$firstname  ";
                
                $lastname = $row['lastName'];
                //echo "$lastname";
                echo"<h2>$firstname $lastname </h2>";
    
            }


            
            //mysqli_close($link);


        ?>
    </div>
</body>
</html>