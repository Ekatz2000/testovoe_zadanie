<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=500, initial-scale=1">


<style>
body {
    background: #8d092a;
    overflow: scroll;
   }
form {
   background: #ffffff;
   padding: 30px;
   text-align: center;
   position: relative; top: 50%;
   margin-left: 40px;
   margin-right: 40px;
   width: 90%;
   border-radius: 7px;
   box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
}

label {
   display: contents;
   font-size: 18px;
   text-align: left;
   margin: 15px;
}

button {
   width: 200px;
   text-align: center;
   border: none;
   background-color: #3d4b53;
   color: #ffffff;
   text-transform: uppercase;
   margin-top: 20px;
   padding: 13px;
   border-radius: 7px;
   font-size: 16px;
}
button:hover {
  background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0 0);
}
h1 {
  color: #94090d;
}
.title {
    font-size: 24px;
    font-weight: bold;
    text-align: left;
    margin-top: 20px;
    color: #333333;
  }
  .dt {
    font-weight: bold;
    font-style: italic;
    text-align: left;
    color: #333333;
  }
  .cont {
    text-align: left;
    font-size: 18px;
    color: #333333;
  }
  a {
    text-decoration: none !important;
  }
</style>
</head>

<body>

<form>
<h1>Свежие новости</h1>
<?php
   $host = 'localhost';
   $db_name = 't953727y_ek';
   $user = 't953727y_ek';
   $password = '111111EKz';
 
      $connection = mysqli_connect($host, $user, $password, $db_name);
      $query = 'SELECT title, content, data FROM `news` ORDER BY data DESC LIMIT 3';
      $result = mysqli_query($connection, $query);

      while($row = $result->fetch_assoc()){
         echo  '<hr>';
         echo  '<div class="title">'.$row['title'].'</div>';
         echo  '<br>';
         echo  '<div class="dt">'.$row['data'].'</div>';
         echo  '<br>';
         echo  '<div class="cont">'.substr($row['content'] ,0, strpos($row['content'],'.',1)).'.'.'</div>';
         echo  '<br>';
      }

      mysqli_close($connection);
?>

<div style="column-count: 2; display: contents;">
<button><a href="http://svyasi.t953727y.beget.tech/news/index.php" style="color: #ffffff;">Все новости</a></button>
<button><a href="http://svyasi.t953727y.beget.tech/forma/index.php" style="color: #ffffff;">Обратная связь</a></button>
</div>

</form>
</body>
</html>