<?php

namespace ContainerPT1N2cb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.c7f47p7'] ?? $container->load('get_ServiceLocator_C7f47p7Service'));

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }

        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => 'async'], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => 'async'], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => 'async']], $a), $b);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
