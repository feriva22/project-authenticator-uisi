<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEAmXZb3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEAmXZb3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEAmXZb3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEAmXZb3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEAmXZb3\App_KernelDevDebugContainer([
    'container.build_hash' => 'EAmXZb3',
    'container.build_id' => '8abe7cc8',
    'container.build_time' => 1575474748,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEAmXZb3');