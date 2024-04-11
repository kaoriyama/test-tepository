
<?php

$people = [
    [
        "name" => "Taro",
        "age" => "25",
        "gender" =>"men",
    ]
    [
        "name" => "Jiro"
        "age" => "20",
        "gender" =>"men"
    ]
    [
        "name" => "hanako",
        "age" => "16",
        "gender" =>"women",
    ]
]

foreach ($people as $person){
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
    echo''
}

foreach ($people as $person){
    echo $person["name"] . '(' . $person["age"] . '歳' . $person["gender"] . ')';
    echo "<br>";
}