<!DOCTYPE HTML>
<html>  
<body>
<br>
<form action="index.php" method="GET">
Name: <input type="text" name="name"><br>

<br>
<button type="submit">submit </button>
</form>
<br>
<br>

<?php
echo 'welcome ';
if (isset($_GET['name'])) {
	echo($_GET['name']);
} else{
    echo('Empty');
}
?>
</body>
</html>