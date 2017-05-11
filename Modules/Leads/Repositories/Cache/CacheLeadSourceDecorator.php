<?php

namespace Modules\Leads\Repositories\Cache;

use Modules\Leads\Repositories\LeadSourceRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheLeadSourceDecorator extends BaseCacheDecorator implements LeadSourceRepository
{
    public function __construct(LeadSourceRepository $leadsource)
    {
        parent::__construct();
        $this->entityName = 'leads.leadsources';
        $this->repository = $leadsource;
    }
}
