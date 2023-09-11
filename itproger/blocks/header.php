<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<header>
    <div>
    <a href="/index.php"><h1>PHP Studies</h1></a>
    <div class="today">
    <?php echo date('d/m/y');?>

    </div>
    </div>

    <?php require_once "./blocks/nav.php"; ?>
</header>