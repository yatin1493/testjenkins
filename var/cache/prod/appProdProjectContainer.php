<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBzipvxf\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBzipvxf/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerBzipvxf.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerBzipvxf\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerBzipvxf\appProdProjectContainer(array(
    'container.build_hash' => 'Bzipvxf',
    'container.build_id' => '02be6602',
    'container.build_time' => 1530795427,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBzipvxf');
