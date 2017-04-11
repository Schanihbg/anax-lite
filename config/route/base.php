<?php
/**
 *  Base routes.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("site/header", ["title" => "Home"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("site/page/home");
    $app->view->add("site/footer");

    $app->response->setBody([$app->view, "render"])->send();
});

$app->router->add("report", function () use ($app) {
    $app->view->add("site/header", ["title" => "Report"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("site/page/report");
    $app->view->add("site/footer");

    $app->response->setBody([$app->view, "render"])->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("site/header", ["title" => "About"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("site/page/about");
    $app->view->add("site/footer");

    $app->response->setBody([$app->view, "render"])->send();
});
