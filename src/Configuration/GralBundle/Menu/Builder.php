<?php
// src/Configuration/GralBundle/Menu/Builder.php
namespace Configuration\GralBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function MenuPrincipal(FactoryInterface $factory)
    {
        $menu = $factory->createItem('Menu',array("class"=>"menu"));
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu->addChild('Home', array('route' => '_homepage','attributes' => array('class' => 'parent')));
        $menu->addChild('About Me', array(
            'uri' => 'http://hola', 
            'routeParameters' => array('id' => 42)
        ));
        return $menu;
    }
}
