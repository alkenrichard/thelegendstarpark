<!DOCTYPE html>
<?php
    include 'conn.php';
    $patung=$con->query("SELECT * FROM patung");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Daftar Patung :
    <ol>
        <?php
            while($pecah=$patung->fetch_assoc()){
        ?>
        <a href="detail.php?id=<?php echo $pecah['id'];?>"><ul><?php echo $pecah['nama']; ?></ul></a>
        <?php } ?>
    </ol>
</body>
</html>