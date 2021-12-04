<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("views/includes/head.php")?>
</head>
<body class="animsition">
    
    <!-- Header -->
    <header>
        <?php include("views/includes/header.php")?>
    </header>
        
    <?php include("views/$page.php"); ?>

    <!-- Footer -->
    <footer class="bg3  p-b-32">
        <?php include("views/includes/footer.php")?>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>
    
    <?php include("views/includes/script.php")?>
</body>
</html>