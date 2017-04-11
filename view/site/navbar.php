<?php
$urlHome  = $app->url->create("");
$urlReport = $app->url->create("report");
$urlAbout = $app->url->create("about");

?><navbar>
<a href="<?= $urlHome ?>">Home</a> | 
<a href="<?= $urlReport ?>">Report</a> | 
<a href="<?= $urlAbout ?>">About</a>
</navbar>
