<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJkSBvTW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJkSBvTW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJkSBvTW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJkSBvTW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJkSBvTW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JkSBvTW',
    'container.build_id' => '8b9a1630',
    'container.build_time' => 1574101701,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJkSBvTW');
