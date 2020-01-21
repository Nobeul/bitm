<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
</head>

<body>
    <?php
    $json_string = '[{ "results" : [ { "address_components" : [ { "long_name" : "1600", "short_name" : "1600", "types" : [ "street_number" ] }, { "long_name" : "Amphitheatre Pkwy", "short_name" : "Amphitheatre Pkwy", "types" : [ "route" ] }, { "long_name" : "Mountain View", "short_name" : "Mountain View", "types" : [ "locality", "political" ] }, { "long_name" : "Santa Clara County", "short_name" : "Santa Clara County", "types" : [ "administrative_area_level_2", "political" ] }, { "long_name" : "California", "short_name" : "CA", "types" : [ "administrative_area_level_1", "political" ] }, { "long_name" : "United States", "short_name" : "US", "types" : [ "country", "political" ] }, { "long_name" : "94043", "short_name" : "94043", "types" : [ "postal_code" ] } ], "formatted_address" : "1600 Amphitheatre Parkway, Mountain View, CA 94043, USA", "geometry" : { "location" : { "lat" : 37.4224764, "lng" : -122.0842499 }, "location_type" : "ROOFTOP", "viewport" : { "northeast" : { "lat" : 37.4238253802915, "lng" : -122.0829009197085 }, "southwest" : { "lat" : 37.4211274197085, "lng" : -122.0855988802915 } } }, "place_id" : "ChIJ2eUgeAK6j4ARbn5u_wAGqWA", "types" : [ "street_address" ] } ], "status" : "OK"}]';
    echo $json_string;
    echo '<br><br>';
    $json_array = json_decode($json_string, true);
    print_r($json_array);
    echo '<br><br>';
    display_array_recursive($json_array);
    function display_array_recursive($json_rec)
    {
        if ($json_rec) {
            foreach ($json_rec as $key => $value) {
                if (is_array($value)) {
                    display_array_recursive($value);
                } else {
                    echo $key . '--' . $value . '<br>';
                }
            }
        }
    }
    ?>
</body>

</html>