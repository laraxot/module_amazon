<?php

declare(strict_types=1);

namespace Modules\Amazon\Providers;

//---- bases ----
//---- services --
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
//use Amazon\ProductAdvertisingAPI\v1\Configuration;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use GuzzleHttp\Client;
use Illuminate\Foundation\AliasLoader;
use Modules\Amazon\Contracts\Factory;
use Modules\Amazon\Services\AmazonClient;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class AmazonServiceProvider.
 */
class AmazonServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'amazon'; //lower del nome

    public function bootCallback(): void {
        $this->app->singleton(
            DefaultApi::class,
            function ($app) {
                $config = (new Configuration())
                    ->setAccessKey(config('amazon-product.api_key'))
                    ->setSecretKey(config('amazon-product.api_secret_key'))
                    ->setRegion(config('amazon-product.region'))
                    ->setHost(config('amazon-product.host'));

                return new DefaultApi(new Client(), $config);
            }
        );

        $this->app->singleton(Factory::class, AmazonClient::class);
    }

    public function registerCallback(): void {
        $loader = AliasLoader::getInstance();
        $loader->alias('AmazonProduct', 'Modules\\Amazon\\Facades\\AmazonProduct');
    }
}
