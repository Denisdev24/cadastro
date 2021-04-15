<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="top">
       <form action="dados.php" method="post">
   Nome    <input type="text" name ="nome">
       </br>
    Idade   <input type="text" name="idade">
       </br>
       <p>Genêro:</p>
       <input type="radio" value="1" name="sexo"><label>Masculino</label>
       </br>
       <input type="radio" value="2" name="sexo"><label>Feminino</label>
        </br>
        <input type ="submit" name ="dados" value="Salvar dados">
       </form>
   </div>
</body>
</html>