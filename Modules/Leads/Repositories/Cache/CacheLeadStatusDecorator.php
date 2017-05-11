<?php

namespace Modules\Leads\Repositories\Cache;

use Modules\Leads\Repositories\LeadStatusRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheLeadStatusDecorator extends BaseCacheDecorator implements LeadStatusRepository
{
    public function __construct(LeadStatusRepository $leadstatus)
    {
        parent::__construct();
        $this->entityName = 'leads.leadstatuses';
        $this->repository = $leadstatus;
    }
}
