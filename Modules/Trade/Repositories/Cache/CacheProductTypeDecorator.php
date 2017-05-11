<?php

namespace Modules\Trade\Repositories\Cache;

use Modules\Trade\Repositories\ProductTypeRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductTypeDecorator extends BaseCacheDecorator implements ProductTypeRepository
{
    public function __construct(ProductTypeRepository $producttype)
    {
        parent::__construct();
        $this->entityName = 'trade.producttypes';
        $this->repository = $producttype;
    }
}
