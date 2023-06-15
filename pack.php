<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Add to Order table</h1>
<form action="packsave.php" method="POST">
        <div class="prod_id">Pack ID: <input type="text" id="prod_id" name="pack_id" placeholder="Pack ID"required><br></div>
        <div class="prod_name">Order ID: <input type="text" id="prod_name" name="order_id" placeholder="Order ID"required><br></div>
        <div class="prod_desc">Status: <input type="text" id="prod_desc" name="status" placeholder="Status"required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
    </form>
    <form method="POST" action="index.php">
        <div class="backBtn"><input type="submit" id="BACKbtn" name="search" value="BACK"></div>
    </form>
</body>
</html>