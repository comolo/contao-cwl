<?php declare(strict_types = 1);

namespace Comolo\AwscwlBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;
use Comolo\AwscwlBundle\ComoloAwscwlBundle;

class Plugin implements BundlePluginInterface, ConfigPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ComoloAwscwlBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader, array $config): void
    {
        $path = '@ComoloAwscwlBundle/Resources/config/';
        $loader->load("$path/services.yml");
        $loader->load("$path/config.yml");
    }
}
