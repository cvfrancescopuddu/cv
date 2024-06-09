
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="./bootstrap-5.3.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php include("./components/carousel.php");?>
<?php include("./components/navbar.php");?>

<?php include("./components/sections/generics.php");?>
<?php include("./components/sections/interests.php");?>
<?php include("./components/sections/about_me.php");?>
<?php include("./components/sections/skills.php");?>

<footer class="footer bg-dark text-white text-center py-4">
      <div class="container">
        <p>&copy; 2024 Powered by Francesco Puddu</p>
        <div>
          <a href="https://wa.me/3458973559" target="_blank" class="text-white mx-2">
            <img src="./img/whatsapp.svg" alt="WhatsApp" style="width: 30px;">
          </a>
          <a href="https://www.linkedin.com/in/francesco-puddu-98ba851a2" target="_blank" class="text-white mx-2">
            <img src="./img/linkedin-original.svg" alt="LinkedIn" style="width: 30px;">
          </a>
        </div>
      </div>
    </footer>
</body>
</html>