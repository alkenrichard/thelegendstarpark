<!DOCTYPE html>
<?php
    include 'conn.php';
    $id=$_GET['id'];
    $patung=mysqli_query($con,"SELECT * FROM patung JOIN fact ON patung.id=fact.id WHERE patung.id=$id");
    $data = mysqli_fetch_array($patung);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['nama'] ?></title>
    <link rel="stylesheet" href="detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>
<body>
    <nav>
        <a href="https://jtp.id/jatimpark3/thelegendstar/mobile/" target="_blank" id="logo">
            <img src="logo.png" alt="logo" class="logo">
        </a>

        <a href="###">
            <div class="share">
                <img src="share.svg" alt="share">
            </div>
        </a>
    </nav>
    <div class="image">
        <div class="transparent"></div>
        <img src="image/<?php echo $data['image']?>" alt="<?php echo $data['nama'] ?>">
    </div>

    <div class="name">
        <h1><?php echo $data['nama'] ?></h1>
        <h5><?php echo $data['jabatan'] ?></h5>
    </div>
    
    <div class="info">
        <div class="born">
            <h6>Kelahiran</h6>
            <h3><?php echo $data['lahir'] ?></h3>
        </div>
        <div class="death">
            <h6>Kematian</h6>
            <h3><?php echo $data['meninggal'] ?></h3>
        </div>
    </div>

    <div class="describ">
        <?php echo $data['deskripsi'] ?>
    </div>

    <div class="fact">
        <button onclick="show_hide()">FUN FACTS<img src="fact.svg" alt="fact"></button>
    </div>
    <div class="full" id="full" style="display:none">
        <ol>
            <?php
                while($pecah=$patung->fetch_assoc()){
            ?>
            <li>
                <?php
                    echo $pecah['judul'];
                ?>
            </li>
            <dd>
                <?php
                    echo $pecah['penjelasan'];
                ?>
            </dd>
            <?php } ?>
        </ol>
    </div>
    <footer>
        <p>Sumber: <a href="<?php echo $data['wikipedia'] ?>" target="_blank">Wikipedia.org</a></p>
    </footer>
</body>
<script src="script.js"></script>
</html>