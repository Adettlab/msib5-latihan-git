<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>latihan gits</title>
    <?php
    $name = "Aditya Eka Pradana Raharjo";
    $kampus = "Universitas Aki Semarang / Teknik Informatika";
    $mitra = "GITS FullStack Developer";
    $hobby = "Mencari sesuatu yang baru";
    ?>
</head>
<body style="background-color: #DDE3E8">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Biodata</h3>
                <br>
                <h5>Nama : <?php echo $name ?></h5>
                <h5>University : <?php echo $kampus ?></h5>              
                <h5>Hobby : <?php echo $hobby ?></h5>
            </div>
            <div class="col-6 col-md-4">
                <div class="card text-center" style="width: 18rem; margin: auto;">
                    <img src="assets/gits.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo $mitra ?> 
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>