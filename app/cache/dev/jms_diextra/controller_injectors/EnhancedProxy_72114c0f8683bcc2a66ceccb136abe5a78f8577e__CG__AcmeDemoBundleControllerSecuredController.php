<?php

namespace EnhancedProxy_72114c0f8683bcc2a66ceccb136abe5a78f8577e\__CG__\Acme\DemoBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class SecuredController__JMSInjector
{
    public static function inject($container) {
        require_once 'D:/xampp/htdocs/mascotas/app/cache/dev/jms_diextra/proxies/EnhancedProxy_72114c0f8683bcc2a66ceccb136abe5a78f8577e-__CG__-Acme-DemoBundle-Controller-SecuredController.php';
        $b = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Acme\\DemoBundle\\Controller\\SecuredController' => array('helloadminAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_d1806fac606cad50a502cbf931275cfe3961da02\__CG__\Acme\DemoBundle\Controller\SecuredController();
        $instance->__CGInterception__setLoader($b);
        return $instance;
    }
}
