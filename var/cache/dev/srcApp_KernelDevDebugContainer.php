<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKUA4QYM\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKUA4QYM/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKUA4QYM.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKUA4QYM\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKUA4QYM\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KUA4QYM',
    'container.build_id' => '60c8c263',
    'container.build_time' => 1568798373,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKUA4QYM');
