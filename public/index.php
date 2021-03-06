<?php

require "../src/routeManager.php";
require "../src/bddManager.php";
require "../src/userManager.php";

$uri = $_SERVER['REQUEST_URI'];
$routeInfos = getRoute($uri);
$conn = getConnection();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="/css/main.css">
    <title>
        <?php echo $routeInfos['title']; ?>
    </title>
</head>
<body>
<div class="container-fluid">
    <header>
        <?php include "../inc/header.php"; ?>
    </header>
    <main>
        <?php include "../page/" . $routeInfos['file']; ?>
    </main>
    <footer>
        <?php include "../inc/footer.php"; ?>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>
<?php if ($routeInfos['page'] === "list"): ?>
    <script src="/js/list.js"></script>
<?php endif; ?>
</body>
</html>