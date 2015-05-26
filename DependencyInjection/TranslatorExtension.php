<?php
namespace Gabrieljmj\TranslatorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Gabrieljmj\TranslatorBundle\DependencyInjection\Configuration;

class TranslatorExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $this->defineParametersForServices($config, $container);
    }

    private function defineParametersForServices(array $configs, ContainerBuilder $container)
    {
        $container->setParameter('gabrieljmj.translator.google.apiKey', $configs['google_translate']['api_key']);
        $container->setParameter('gabrieljmj.translator.yandex.apiKey', $configs['yandex_translate']['api_key']);
    }
}