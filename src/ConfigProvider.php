<?php


namespace Menciusnh4\Mongodb;

use Menciusnh4\Mongodb\MongoDb;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                MongoDb::class => MongoDb::class,
            ],
            'commands' => [
            ],
            'scan' => [
                'paths' => [
                    __DIR__,
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config of mongodb client.',
                    'source' => __DIR__ . '/../Publish/mongodb.php',
                    'destination' => BASE_PATH . '/config/autoload/mongodb.php',
                ],
            ],
        ];
    }
}