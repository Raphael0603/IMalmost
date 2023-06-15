<?php
        $order_id  =          $_POST['order_id'];
        $prod_id =          $_POST['prod_id'];
        $QTY =               $_POST['QTY'];
    
        include_once('config.php');

        $conn = new mysqli ($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO orders (order_id, prod_id, QTY) VALUES ($order_id, $prod_id, '$QTY')";

        if($conn->query($sql) === TRUE ) {
            $conn->close();
            header("Location: index.php");
        }else{
            echo "Error: " .$sql . "<br>" . $conn->error;
        }

    ?>