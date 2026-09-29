<?php
if (isset($_POST["controller"])) $controller = $_POST["controller"];
else $controller = $_GET["controller"];

if (isset($_POST["action"])) $action = $_POST["action"];
else $action = $_GET["action"];

if ($controller == "" || $action == "") {
    $controller = 'pages';
    $action = 'home';
}
?>

<!DOCTYPEDOCTYPE html>
<html>
<head><title>MVC</title></head>
<body>
    <?php echo "controller = $controller, action = $action<br>"; ?>
    <?php require("routes.php"); ?>
</body>
</html>
