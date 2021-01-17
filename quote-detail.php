<?php
    if (isset($_GET['calc']) && @$_GET['calc']==1) {
        $_SESSION['quote_id'] = 0;
    }
    elseif ($_POST['submit']) {
        #masuk database callback quote id masuk session
    }
    else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Details</title>
</head>
<body>
    <div class="form">
        <input type="text" name="name" id="">
        <input type="phone" name="phone" id="">
        <input type="email" name="email" id="">
        <input type="text" name="address" id="">
        <input type="text" name="address" id="">
        <input type="button" name="submit" id="">
        <a href="?calc=1">Pengiraan Sahaja</a>
    </div>
</body>
</html>

<?php }?>