<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRDmh1JS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRDmh1JS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRDmh1JS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRDmh1JS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRDmh1JS\App_KernelDevDebugContainer([
    'container.build_hash' => 'RDmh1JS',
    'container.build_id' => 'ba097b1e',
    'container.build_time' => 1648565674,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRDmh1JS');