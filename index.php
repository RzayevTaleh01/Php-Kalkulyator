<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Kalkulyator | Azcoder Group</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    //Script 0-dan RzayevTaleh01 tərəfindən yazılıb.Uğurlar :)
     if($_POST){
         
     
      $a=trim($_POST["a"]);
      $b=trim($_POST["b"]);
      $c=$_POST["emeliyyat"];
        if(!$a or !$b){
		echo "<script>alert('Diqqət!! Xanaları doldurmalısınız!!')</script>";
        }
        if(!is_numeric($a) or !is_numeric($b)){
		echo "<script>alert('Diqqət!! Yalnız Rəqəm Daxil Etməlisən!!!!')</script>";
        }
        if($c=="toplama"){
          $cavab=$a+$b;
    }
        if($c=="cixma"){
          $cavab=$a-$b;
    }
        if($c=="bolme"){
          $cavab=$a/$b;
    }
        if($c=="vurma"){
          $cavab=$a*$b;
    }
     }
  ?>
    <div class="kalkulyator">
        <h2>Kalkulyator</h2>
        <form action="index.php" method="post">
            <input type="text" name="a" class="operand" placeholder="A-ni daxil edin">
            <input type="text" name="b" class="operand" placeholder="B-ni daxil edin">
            <select name="emeliyyat" class="emeliyyat">
                <option value="toplama">+</option>
                <option value="cixma">-</option>
                <option value="vurma">*</option>
                <option value="bolme">/</option>
            </select>
            <input type="submit" class="hesabla" value="Hesabla">
            <input type="text" value="<?php echo $cavab;?>" class="operand" placeholder="0" readonly>
             
        </form>
    </div>
</body>

</html>
