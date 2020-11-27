<?php

// Example 1
class Product
{
    public function __destruct()
    {
        echo "Destroyed<br>";
    }
}

$p1 = new Product();
$reviews = new WeakMap();
$reviews[$p1] = [5, 5, 4];

echo '<pre>';
var_dump($reviews);
echo '</pre>';

unset($p1);
echo "Unset<br>";

echo '<pre>';
var_dump($reviews);
echo '</pre>';


// Example 2
class ReviewList
{
    private WeakMap $cache;

    public function __construct()
    {
        $this->cache = new WeakMap();
    }

    public function getReviews(Product $prod): string
    {
        return $this->cache[$prod] ??= $this->findReviews($prod->id());
    }

    protected function findReviews(int $prodId): array
    {
        // ...
    }
}


$reviewList = new ReviewList();
$prod1 = getProduct(1);
$prod2 = getProduct(2);

$reviews_p1 = $reviewList->getReviews($prod1);
$reviews_p2 = $reviewList->getReviews($prod2);

// ...

$reviews_p1_again = $reviewList->getReviews($prod1);

unset($prod1);
