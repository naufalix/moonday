<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("views/includes/head.php")?>
</head>

<body class="skin-default-dark fixed-layout">
    <?php include("views/includes/preloader.php")?>
    <div id="main-wrapper">
        <?php if ($page!="login"){
            include("views/includes/header.php");
            include("views/includes/sidebar.php");
        } ?>
        <div class="page-wrapper">
            <?php include("views/$page.php"); ?>
        </div>
    </div>
    <?php if ($page!="login"){
        include("views/includes/footer.php");
    } ?>
    <?php include("views/includes/script.php")?>
</body>

</html>