<?php 
include './data/config.php'; 
include './services/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MidCourse_Matheus</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');
*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    color: whitesmoke;
}
body{
    background-color: #082032;
}
textarea, input{
    background-color: whitesmoke !important;
}
</style>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark" style="background-color: #2C394B;">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link active" href="<?php echo $baseName."VegEnc.php" ?>" aria-current="page">Encrypt Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseName."VegDec.php" ?>">Decrypt Page</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container-fluid">
        
    