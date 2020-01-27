<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
            <input type="text" name="ara" placeholder="Arama yapın...">
            <input type="submit" value="Ara!">
    </form>
   <h1> <?php     
    $mahmut=$_GET["ara"];
    echo $mahmut;

    ?></h1>

</body>
</html>