<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Info for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Info\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class InfoController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }
    public function aboutAction()
    {
        return new ViewModel();
    }
    public function joinAction()
    {
        return new ViewModel();
    }
    public function concertsAction()
    {
        return new ViewModel();
    }
    public function contactAction()
    {
        return new ViewModel();
    }
    public function newsletterAction()
    {
        return new ViewModel();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /info/info/foo
        return array();
    }
}
