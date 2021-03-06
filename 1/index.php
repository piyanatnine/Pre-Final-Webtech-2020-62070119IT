<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <?php

        $urlA = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
        $response = file_get_contents($urlA);
        $result = json_decode($response);

        echo "<div class='container'><div class='row'>";

        foreach($result->tracks->items as $items){
            $img = $items->album->images[0]->url;
            $name = $items->album->name;
            $artist = $items->album->artists[0]->name;
            $release = $items->album->release_date;
            $number = count($items->album->available_markets);
            echo "
            <div class='col-3 m-3'>
            <div class='card'>
                <img class='card-img-top' src='$img'>
                <div class=card-body>
                    <h5>$name</h5>
                    <p>
                        Artist: $artist<br>
                        Release date: $release<br>
                        Avarible: $number countries
                    </p>
                </div>
            </div>
            </div>
            ";
        }
        echo "</div></div>";


    ?>
</body>
</html>