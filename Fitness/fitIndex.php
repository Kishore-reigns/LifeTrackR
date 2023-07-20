<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness</title>
    
    <link rel="stylesheet" href="bmicss.css">
    <script src="fitnessjs.js"></script>
</head>
<body>

    <img src="Logo Light'.jpg" alt="image not found " class = "logo">
    
    <div class="bmi">
        <h1 class="username">Hello User</h1>
        <form action="FitindexPHP.php" name="fitnessform" method="post">
            <div class="height" id="enterheight" name="heightdiv">
                <h1 class="heightweight">Enter Your Height (cm)</h1>
                <input placeholder="Enter" type="number" name="ht" required><br>
                <input type="button" value="Next" onclick="movetoheight()" class="nextbutton">
            </div>
            <div class="weight" id="enterweight" name="weightdiv">
                <h1 class="heightweight">Enter Your weight (Kg)</h1>
                <input type="number" name="wt" required><br>
                <input type="submit" value="Submit" name="submit" class="submitbutton">
            </div>
        </form>
    </div>
    


    
</body>
</html>