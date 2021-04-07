<?php


namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Class Controller
 * @package Source\Controllers
 */
abstract class Controller
{
    /** @var Engine */
    protected $view;

    /** @var Router */
    protected $router;

    /** @var Optimizer */
    protected $seo;

    /**
     * Controller constructor.
     * @param $router
     */
    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname(__DIR__, 2) . "/views", "php");
        $this->view->addData(["router" => $this->router]);

        $this->seo = new Optimizer();
        $this->seo->openGraph(site("name"),site("locale"),"article")
            ->publisher(social("facebook_page"),social("facebook_author"))
            ->twitterCard(social("twitter_creator"),social("twitter_site"),site("domain"))
            ->facebook(social("facebook_appId"));
    }
}
