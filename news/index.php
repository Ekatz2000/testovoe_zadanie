<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
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
      position: relative; top: 50%;
      margin-left: 40px;
      width: 90%;
      border-radius: 7px;
      border: 2px solid #333333;
      box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
    }
    label {
      display: contents;
      font-size: 18px;
      margin: 15px;
    }
    a {
        text-decoration: none !important;
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
    <form autocomplete="off">
    <h1 style="text-align: center; color: #94090d">Новости</h1>

    <button><a href="http://svyasi.t953727y.beget.tech/news/addnews.php" style="color: #ffffff;">Добавить новость</a></button>

    <?php include 'allnews.php';
    ?>
    <div style="column-count: 2; display: contents;">
    <button><a href="http://svyasi.t953727y.beget.tech/index.php" style="color: #ffffff;">Главная</a></button>
    <button><a href="http://svyasi.t953727y.beget.tech/forma/index.php" style="color: #ffffff;">Обратная связь</a></button>
    </div>
    </form>
  </body>
</html>