<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background: #8d092a;
   }
form {
   background: #ffffff;
   padding: 30px;
   text-align: center;
   position: relative; 
   margin-top: 1%;
   margin-left: 20%;
   width: 50%;
   border-radius: 7px;
   border: 2px solid #333333;
   box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
}
form .center {
   display: inline-block;
   vertical-align: top;
   width: 50%px;
   margin: 20px;
}

label {
   display: block;
   font-size: 18px;
   text-align: center;
   margin: 15px;
}
input, textarea {
   border: 1px solid #dbdbd2;
   padding: 10px;
   font-size: 16px;
   width: 436px;
   border-radius: 7px;
}
textarea {
   resize: none;
   height: 98px;
   margin-bottom: 32px;
   font-family: Roboto;
}
input[type="submit"] {
   width: 200px;
   float: center;
   border: none;
   background-color: #3d4b53;
   color: #ffffff;
   text-transform: uppercase;
   margin-top: 20px;
   padding: 13px
}
input[type="submit"]:hover {
  background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0 0);
}
h1 {
	color: #94090d;
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
  label {
   display: block;
   color: #333333;
   font-size: 18px;
   text-align: center;
   margin: 15px;
}
input {
   border: 1px solid #dbdbd2;
   padding: 2%;
   font-size: 16px;
   width: 70%;
   border-radius: 7px;
}
input[type="submit"] {
   width: 70%;
   text-align: center;
   border: none;
   background-color: #3d4b53;
   color: #ffffff;
   text-transform: uppercase;
   margin-top: 7%;
   margin-bottom: 5%;
   padding: 4%;
}
textarea {
   resize: none;
   width: 70%;
   height: 98px;
   margin-bottom: 32px;
   font-family: Roboto;
}
}
</style>
</head>
<body>
<form method="post" action="addnewsscript.php" autocomplete="off">
	<h1>???????????????? ?????????????? </h1> 
	<div class="modal-body">
		<label for="title">???????????????? ??????????????:</label>
		<input class="textarea" name="title" rows="1" required></input>
		<label for="data">???????? ????????????????:</label>
		<input name="data" rows="1" placeholder="YYYY-MM-DD" required></input>
		<label for="content">???????????????????? ??????????????:</label>
		<textarea id="content" name="content" rows="20" required></textarea>
		<label for="key" style="font-weight: bold">????????:</label>
		<input name="key" rows="1" placeholder="xxx" required></input>
	</div>
	<div class="modal-footer">
		<input type="submit" name="submit_btn" class="btn btn-primary" value="????????????????">
	</div>
</form>
</body>
</html>