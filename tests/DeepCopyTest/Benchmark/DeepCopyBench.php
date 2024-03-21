<?php

namespace PHPBenchDeepCopyTest;

use function DeepCopy\deep_copy;
use function DeepCopy\deep_copy_weak_map;

class DeepCopyBench
{
    /**
     * @Revs(1000)
     * @Iterations(50)
     */
    public function benchDeepCopyDefault()
    {
        $parent = new \stdClass();
        $childProto = new \stdClass();

        $parent->child1 = $childProto;
        $parent->child2 = $childProto;

        deep_copy($parent);
    }

    /**
     * @Revs(1000)
     * @Iterations(50)
     */
    public function benchDeepCopyMultipleReferences()
    {
        $parent = new \stdClass();
        $childProto = new \stdClass();

        $parent->child1 = $childProto;
        $parent->child2 = $childProto;
        $parent->child3 = $childProto;
        $parent->child4 = $childProto;
        $parent->child5 = $childProto;

        deep_copy($parent);
    }

    /**
     * @Revs(1000)
     * @Iterations(50)
     */
    public function benchDeepCopyWeakMapDefault()
    {
        $parent = new \stdClass();
        $childProto = new \stdClass();

        $parent->child1 = $childProto;
        $parent->child2 = $childProto;

        deep_copy_weak_map($parent);
    }

    /**
     * @Revs(1000)
     * @Iterations(50)
     */
    public function benchDeepCopyWeakMapMultipleReferences()
    {
        $parent = new \stdClass();
        $childProto = new \stdClass();

        $parent->child1 = $childProto;
        $parent->child2 = $childProto;
        $parent->child3 = $childProto;
        $parent->child4 = $childProto;
        $parent->child5 = $childProto;

        deep_copy_weak_map($parent);
    }
}