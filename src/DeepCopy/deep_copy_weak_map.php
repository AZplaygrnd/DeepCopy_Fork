<?php

namespace DeepCopy;

use DeepCopy\DeepCopyWeakMap;

use function function_exists;

if (false === function_exists('DeepCopy\deep_copy_weak_map')) {
    /**
     * Deep copies the given value.
     *
     * @param mixed $value
     * @param bool  $useCloneMethod
     *
     * @return mixed
     */
    function deep_copy_weak_map($value, $useCloneMethod = false)
    {
        return (new DeepCopyWeakMap($useCloneMethod))->copy($value);
    }
}
