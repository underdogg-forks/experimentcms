<?php

namespace Modules\Trade\Repositories\Cache;

use Modules\Trade\Repositories\ProductRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductDecorator extends BaseCacheDecorator implements ProductRepository
{
    public function __construct(ProductRepository $product)
    {
        parent::__construct();
        $this->entityName = 'trade.products';
        $this->repository = $product;
    }
}
