<?php

namespace Modules\Trade\Repositories\Cache;

use Modules\Trade\Repositories\SalesOrderRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSalesOrderDecorator extends BaseCacheDecorator implements SalesOrderRepository
{
    public function __construct(SalesOrderRepository $salesorder)
    {
        parent::__construct();
        $this->entityName = 'trade.salesorders';
        $this->repository = $salesorder;
    }
}
