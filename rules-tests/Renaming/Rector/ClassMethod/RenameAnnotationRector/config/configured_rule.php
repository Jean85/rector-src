<?php

declare(strict_types=1);

use Rector\Renaming\Rector\ClassMethod\RenameAnnotationRector;
use Rector\Renaming\ValueObject\RenameAnnotationByType;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(RenameAnnotationRector::class)
        ->configure([new RenameAnnotationByType('PHPUnit\Framework\TestCase', 'scenario', 'test')]);
};
