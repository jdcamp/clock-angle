<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ClockAngle.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
    return $app['twig']->render('clock-angle.html.twig');
    });

    $app->post("/angle-result", function() use ($app) {
        $newClock = new ClockAngle();
    return $app['twig']->render('angle-result.html.twig', array('output' => $newClock->angle($_POST['hour'], $_POST['minutes'])));
    });

    return $app;
 ?>
