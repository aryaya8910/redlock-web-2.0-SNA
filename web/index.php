<?php
    # Create variables and credentials to use.
    $container = "redlockdb"; # name server database (containers) used.
    $user = "root"; # username default.
    $pass = ""; # the password is empty because it has been set-up in ENV
    $db = "redlock"; #name database used

    # MAke new connection to mysql.
    $conn = new mysqli($container, $user, $pass, $db);

    # Make validation if there is no connection to the database, then we turn off the connection and display connection failed
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    # Variable to retrieve all the data that is in the table users.
    $sql = "SELECT * FROM users";

    # Get result from sql variable. 
    $res = $conn->query($sql);

    # Validate if there is data in the database and its tables
    if($res->num_rows > 0){
        # Validation prints data if the data is in the table "users"
        while($row = $res->fetch_assoc()){
        
            echo "ID: ". $row["ID"]. " | Nama: ". $row["Nama"]. " | Alamat: ". $row["Alamat"]. " | Jabatan: ". $row["Jabatan"]. "<br>";
        }
    }
    else{
        # if there is no data, then it will display NULL.
        echo "NULL";
    }

    # Close connection with database.
    $conn->close();
?>