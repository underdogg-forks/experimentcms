<?php

namespace Modules\Trade\Repositories\Cache;

use Modules\Trade\Repositories\ProductCategoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductCategoryDecorator extends BaseCacheDecorator implements ProductCategoryRepository
{
    public function __construct(ProductCategoryRepository $productcategory)
    {
        parent::__construct();
        $this->entityName = 'trade.productcategories';
        $this->repository = $productcategory;
    }
}
