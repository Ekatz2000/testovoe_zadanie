<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
   background: #8d092a;
   overflow: scroll;
}
form {
   background: #ffffff;
   padding: 30px;
   text-align: center;
   position: relative;
   margin-left: 40px;
   margin-right: 40px;
   width: 90%;
   border-radius: 7px;
   border: 2px solid #333333;
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

  @media (min-width: 300px) and (max-width: 900px) {
    form {
     border-radius: 7px;
     width: 85%;
     border: 2px solid #333333;
     padding-left: 4%; 
     padding-bottom: 2%;
     padding-top: 2%;
     padding-right: 4%;
     margin-top: 30px;
     margin-left: 3%;
     background: #ffffff;
}
    button {
       width: 100%;
       text-align: center;
       border: none;
       background-color: #3d4b53;
       color: #ffffff;
       text-transform: uppercase;
       margin-top: 5%;
       padding: 5%;
       border-radius: 7px;
       font-size: 16px;
    }
  }
</style>
</head>

<body>

<form>
<h1>Свежие новости</h1>
<?php
  require_once 'news/pdoconfig.php';
 
      $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
      $sql = 'SELECT title, content, data FROM `news` ORDER BY data DESC LIMIT 3';
      $query = $db->prepare($sql);
      $query->execute();
      $result_array = $query->fetchAll();

       foreach ($result_array as $result_row) {
         echo  '<hr>';
         echo  '<div class="title">'.$result_row['title'].'</div>';
         echo  '<br>';
         echo  '<div class="dt">'.$result_row['data'].'</div>';
         echo  '<br>';
         echo  '<div class="cont">'.substr($result_row['content'] ,0, strpos($result_row['content'],'.',1)).'.'.'</div>';
         echo  '<br>';
      }

      $db = null;
?>

<div style="column-count: 2; display: contents;">
<button><a href="http://svyasi.t953727y.beget.tech/news/index.php" style="color: #ffffff;">Все новости</a></button>
<button><a href="http://svyasi.t953727y.beget.tech/forma/index.php" style="color: #ffffff;">Обратная связь</a></button>
</div>

</form>
</body>
</html>
