<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4U5iGAO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4U5iGAO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4U5iGAO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4U5iGAO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4U5iGAO\App_KernelDevDebugContainer([
    'container.build_hash' => '4U5iGAO',
    'container.build_id' => 'd57733ab',
    'container.build_time' => 1669200529,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4U5iGAO');
