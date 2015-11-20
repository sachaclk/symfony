<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/vote_')) {
            // vote_up
            if (0 === strpos($pathinfo, '/vote_up') && preg_match('#^/vote_up/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vote_up')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::setVoteUp',));
            }

            // vote_down
            if (0 === strpos($pathinfo, '/vote_down') && preg_match('#^/vote_down/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vote_down')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::setVoteDown',));
            }

        }

        if (0 === strpos($pathinfo, '/b')) {
            // punchline
            if ($pathinfo === '/bestpunchline') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showBestRatedAction',  '_route' => 'punchline',);
            }

            // author
            if (0 === strpos($pathinfo, '/by_author') && preg_match('#^/by_author/(?P<author>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'author')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showByAuthorAction',));
            }

        }

        // create
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'create',);
        }

        // quote
        if (0 === strpos($pathinfo, '/quote') && preg_match('#^/quote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showOneQuoteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
