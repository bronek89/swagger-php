<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Tests\Fixtures\PHP;

/**
 * @OA\Schema()
 */
class Php8PropertyPromotion
{
    /**
     * @OA\Property(description="baz")
     */
    public int $bar;

    public function __construct(
        /**
         * @OA\Property(description="baz")
         */
        public int $baz,
    ) {
    }
}
