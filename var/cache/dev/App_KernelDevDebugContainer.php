<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHhht9n4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHhht9n4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHhht9n4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHhht9n4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHhht9n4\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hhht9n4',
    'container.build_id' => '0527de78',
    'container.build_time' => 1678985390,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHhht9n4');
