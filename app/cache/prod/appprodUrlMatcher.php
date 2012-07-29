<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_index
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog_index');
                }
                return array (  '_controller' => 'My\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_index',);
            }

            // blog_new
            if ($pathinfo === '/blog/new') {
                return array (  '_controller' => 'My\\BlogBundle\\Controller\\DefaultController::newAction',  '_route' => 'blog_new',);
            }

            // blog_show
            if (preg_match('#^/blog/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\BlogBundle\\Controller\\DefaultController::showAction',)), array('_route' => 'blog_show'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
