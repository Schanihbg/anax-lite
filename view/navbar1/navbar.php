<?php
$navbar = [
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

?>

<div class="header">
    <nav class="navbar navbar-inverse bg-inverse rounded navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?= $app->url->create($navbar["items"]["home"]["route"]) ?>">Lösningen</a>
        <div class="collapse navbar-collapse" id="containerNavbar">
            <ul class="navbar-nav mr-auto">
            <?php
            foreach ($navbar["items"] as $key) {
                echo '<li class="nav-item">';
                echo '<a class="nav-link ' . ($app->request->getRoute() == $key["route"] ? "active" : "") . '" href="' . $app->url->create($key["route"]) . '">' . $key["title"] . '</a>';
                echo '</li>';
            }
            ?>
            </ul>
        </div>
    </nav>
</div>
