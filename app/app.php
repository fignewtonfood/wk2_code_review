<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CountRepeats.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app){
        return $app['twig']->render('count_input.html.twig');
    });

    $app->get('/results', function() use ($app){
        $new = new CountRepeats;
        $count = $new->scrabbleScoreCalculator($_GET['master'],$_GET['search']);
        return $app['twig']->render('count_results.html.twig', array('count' => $count));
    });

    return $app;
?>
