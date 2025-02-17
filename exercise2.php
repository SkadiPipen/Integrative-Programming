<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Largest Cities in the World</h1>

        <?php
            //Define Cities using Array
            $cities = [
                "Tokyo", 
                "Mexico City", 
                "New York City", 
                "Mumbai", 
                "Seoul", 
                "Shanghai", 
                "Lagos", 
                "Buenos Aires", 
                "Cairo", 
                "London"];

            //Separate the Cities with commas
            echo "<p>Here are 10 of the world's largest cities:</p>";
            $cityCount = count($cities);
            for ($i = 0; $i < $cityCount; $i++) {
                echo $cities[$i];
                if ($i < $cityCount - 1) {
                    echo ", ";
                }
            }

            //Sort and print in an unordered list
            sort($cities);
            echo "<p>Sorted List of Cities:</p><ul class='city-list'>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";

            //Add new cities
            $newCities = ["Los Angeles", "Calcutta", "Osaka", "Beijing"];
            $cities = array_merge($cities, $newCities);

            //Sort again and print the updated list
            //(Pwede ra mo gamit built-in functions sir? hehe)
            sort($cities);
            echo "<p>Updated List After Adding More Cities:</p><ul class='city-list'>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
