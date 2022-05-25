<?php 
include __DIR__ .'/database.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>php Dischi</title>
</head>

<body>
    <header>
        <nav>
            <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png" alt="logo">
        </nav>
    </header>
    <main>
        <div class="container  ">
            <div class="row ">
                <?php foreach($dischi as $disco){ ?>
                <div class="card-container text-center ">
                    <img src="<?php echo $disco['poster']  ?>" alt="disco.title">
                    <h5> <?php echo $disco['title'] ?></h5>
                    <p><?php echo $disco['author'] ?></p>
                    <p><?php echo $disco['year'] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>