<meta charset="UTF-8">
<?php
if (isset($_POST['submit_btn'])) {

$title = $_POST[title];
$content = $_POST[content];
$dt = $_POST[data];
$key = $_POST[key];

require_once 'pdoconfig.php';
if ($key == 456) {
	try {	
    $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
    $db->exec("set names utf8");
	$data = array( 'title' => $title, 'data' => $dt, 'content' => $content ); 
 	$query = $db->prepare("INSERT INTO $db_table (title, data, content) VALUES (:title, :data, :content)");
$query->execute($data);

$result = true;
    } catch (PDOException $e) {
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
    	echo "Новость добавлена";
    	echo "<br>";
    	echo "<a href='addnews.php'>Вернуться</a>";
    }
} else {
	echo 'Ошибка(';
}
}

?>
