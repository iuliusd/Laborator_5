<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table with database</title>
        <link rel="stylesheet" href="viewstyle.css" />
    </head>
    <body>

<div class="container">
    <h2>Table with database info</h2>
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Id</div>
            <div class="col col-2">Name</div>
            <div class="col col-3">Email</div>
            <div class="col col-4">Phone</div>
            <div class="col col-5">Address</div>
        </li>
        <?php
                    $connection = mysqli_connect("localhost","root","","profiles");
                    if ($connection->connect_error){
                        die("Connection failed:".$connection->connect_error);
                    }
                    $sql = "SELECT id,nume,email,phone,address from registration";
                    $result = $connection->query($sql);
                    if ($result->num_rows>0){
                        while ($row = $result->fetch_assoc()){
                            echo "<a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=profiles&table=registration'>
                                    <li class='table-row'>
                                        <div class='col-1'>".$row["id"]."</div>
                                        <div class='col-2'>".$row["nume"]."</div>
              
                                        <div class='col-3'>".$row["email"]."</div>
                                        <div class='col-4'>".$row["phone"]."</div>
                                        <div class='col-5'>".$row["address"]."</div>
                                  </li>
                                  </a>";
                        } echo "</ul>";
                    }else{
                        echo "0 result";
                    }
                    $connection->close();
                    ?>
</div>
    </body>
</html>
