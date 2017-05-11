<?php

namespace Modules\Leads\Repositories\Cache;

use Modules\Leads\Repositories\LeadRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheLeadDecorator extends BaseCacheDecorator implements LeadRepository
{
    public function __construct(LeadRepository $lead)
    {
        parent::__construct();
        $this->entityName = 'leads.leads';
        $this->repository = $lead;
    }
}
