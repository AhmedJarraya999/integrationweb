<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0ZtNDur\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0ZtNDur/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0ZtNDur.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0ZtNDur\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container0ZtNDur\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '0ZtNDur',
    'container.build_id' => '2bd27e03',
    'container.build_time' => 1651970854,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0ZtNDur');