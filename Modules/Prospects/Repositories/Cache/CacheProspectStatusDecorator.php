<?php

namespace Modules\Prospects\Repositories\Cache;

use Modules\Prospects\Repositories\ProspectStatusRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProspectStatusDecorator extends BaseCacheDecorator implements ProspectStatusRepository
{
    public function __construct(ProspectStatusRepository $prospectstatus)
    {
        parent::__construct();
        $this->entityName = 'prospects.prospectstatuses';
        $this->repository = $prospectstatus;
    }
}
