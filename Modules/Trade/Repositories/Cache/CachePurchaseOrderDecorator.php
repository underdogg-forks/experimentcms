<?php

namespace Modules\Trade\Repositories\Cache;

use Modules\Trade\Repositories\PurchaseOrderRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePurchaseOrderDecorator extends BaseCacheDecorator implements PurchaseOrderRepository
{
    public function __construct(PurchaseOrderRepository $purchaseorder)
    {
        parent::__construct();
        $this->entityName = 'trade.purchaseorders';
        $this->repository = $purchaseorder;
    }
}
