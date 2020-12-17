<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first example</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="post" >
            <div class="form-group">
                <label for="">Please select the day</label>
                <select name="day" id="">
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option >Friday</option>
                    <option >Saturday</option>
                    <option >Sunday</option>
                </select>
                <input class="btn btn-info" type="submit" value=" FROM GO" name="">
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['day'])){
        $day=$_POST['day'];
    if($day=='Monday'){
    $meal=" Today's meal is dal chawal";
    }
    elseif($day =='Tuesday'){
        $meal= "Today's meal is Qeema";
    }
    elseif($day =='Wednesday'){
        $meal="Today's meal is  sabzi";
    }
    elseif($day=='Thursday'){
        $meal=" Today's meal is kabab pratha";
    }
    elseif($day=='Friday'){
        $meal=" Today's meal is Fish";
    }
    elseif($day=='Saturday'){
        $meal=" Today's meal is  zinger";
    }
    elseif($day=='Sunday'){
        $meal="Today's meal is pulao";
        
    } 

    echo $meal;
    }
    
    
    ?>
</body>
</html>