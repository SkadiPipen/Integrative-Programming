<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Seasons</h1>

        <?php
            // Define an array of weather conditions
            $weatherConditions = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

            echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had 
                <b>{$weatherConditions[5]}</b> and <b>{$weatherConditions[6]}</b>. Then came 
                <b>{$weatherConditions[1]}</b> with a few <b>{$weatherConditions[2]}</b> and some 
                <b>{$weatherConditions[0]}</b>. At least we didn't get any <b>{$weatherConditions[3]}</b> 
                or <b>{$weatherConditions[4]}</b>.</p>";
        ?>
    </div>
</body>
</html>
