<?php
$navbar = [
    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "home" => [
            "title" => "Home",
            "route" => "",
        ],
        "report" => [
            "title" => "Report",
            "route" => "report",
        ],
        "about" => [
            "title" => "About",
            "route" => "about",
        ],
    ]
];

echo '<navbar class="'.$navbar["config"]["navbar-class"].'">';
foreach ($navbar["items"] as $key) {
    echo "\n";
    echo '<a href="'.$app->url->create($key["route"]).'">'.$key["title"].'</a>';
}
echo "\n".'</navbar>'."\n";
