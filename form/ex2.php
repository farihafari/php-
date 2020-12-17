<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $day=$_POST['day'];
    if($day=='Monday'){
    $meal="dal chawal";
    }
    elseif($day =='Tuesday'){
        $meal= "Qeema";
    }
    elseif($day =='Wednesday'){
        $meal=" sabzi";
    }
    elseif($day=='Thursday'){
        $meal=" kabab pratha";
    }
    elseif($day=='Friday'){
        $meal=" Fish";
    }
    elseif($day=='Saturday'){
        $meal="  zinger";
    }
    elseif($day=='Sunday'){
        $meal=" pulao";
        
    }
    ?>
   today's meal is <?php  echo $meal?>
 

</body>
</html>