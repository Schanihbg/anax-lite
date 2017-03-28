<?php
/**
 *  Base routes.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("site/header", ["title" => "Home"]);
    $app->view->add("site/navbar");
    $app->view->add("site/page/home");

    $app->response->setBody([$app->view, "render"])->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("site/header", ["title" => "About"]);
    $app->view->add("site/navbar");
    $app->view->add("site/page/about");

    $app->response->setBody([$app->view, "render"])->send();
});
