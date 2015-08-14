<?php
  //dependencies
  //--opens autoload.php which loads Silex files in vendor folder
    require_once __DIR__."/../vendor/autoload.php";
  //--opens CountRepeats.php
    require_once __DIR__."/../src/CountRepeats.php";

  //instantiates the Silex and Twig application objects
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  //----routes----
  //--homepage--
  //creates a route to homepage by calling the get method on $app object
    $app->get('/', function() use ($app){
      //tells $app to use twig to render count input page
        return $app['twig']->render('count_input.html.twig');
    });

  //--results page--
  //creates a route to results page by calling the get method on $app object
    $app->get('/results', function() use ($app){
      //instantiates new CountRepeats object
        $new = new CountRepeats;
      //gets user input data and passes it through the instantiated countRepeatsMethod and stores it to count
        $count = $new->countRepeatsMethod($_GET['master'],$_GET['search']);
      //tells $app to use twig to render count results page and stores 'count' as an index to $count so that twig can use it
        return $app['twig']->render('count_results.html.twig', array('count' => $count));
    });
    return $app;
?>
