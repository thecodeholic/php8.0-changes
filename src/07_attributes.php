<?php

use app\attributes\ListenTo;
use app\attributes\ProductCreated;
use app\attributes\ProductDeleted;

#[Attribute]
class ProductSubscriber
{
    #[
        ListenTo( \app\attributes\Product::EVENT_CREATED ),
        \app\attributes\SampleAttribute,
    ]
    public function onProductCreated(ProductCreated $event)
    { /* … */
    }

    #[ListenTo( \app\attributes\Product::EVENT_DELETED )]
    public function onProductDeleted(ProductDeleted $event)
    { /* … */
    }
}

$reflectionClass = new ReflectionClass(ProductSubscriber::class);
$m = $reflectionClass->getMethod('onProductCreated');
echo '<pre>';
var_dump($m->getAttributes()[1]->getName());
echo '</pre>';

// All different variations of attributes
#[ClassAttribute]
#[AttributeWithScalarExpression(1 + 1)]
#[AttributeWithClassNameAndConstants(PDO::class, PHP_VERSION_ID)]
#[AttributeWithClassConstant(Http::POST)]
#[AttributeWithBitShift(4 >> 1, 4 << 1)]
class MyClass
{
    #[PropertyAttribute]
    public int $foo;

    #[ConstAttribute]
    public const BAR = 1;

    /** @return void */
    #[MethodAttribute]
    /** @return void */
    public function doSomething(#[ArgumentAttribute] $bar): void
    {
        $closure = #[ClosureAttribute] fn() => 1;
    }
}

$object = new #[ObjectAttribute] class () { /* … */
};

#[FunctionAttribute]
function foo()
{ /* … */
}





