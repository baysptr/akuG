<html lang="en">
<head><title>XSS test</title></head>
<body>
<form action="" method="get"><input type="text" name="xss"><input type="submit"></form>
<p>Result: <?= $_GET['xss'] ?></p>
</body>
</html>