<?php

namespace Modules\Prospects\Repositories\Cache;

use Modules\Prospects\Repositories\ProspectSourceRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProspectSourceDecorator extends BaseCacheDecorator implements ProspectSourceRepository
{
    public function __construct(ProspectSourceRepository $prospectsource)
    {
        parent::__construct();
        $this->entityName = 'prospects.prospectsources';
        $this->repository = $prospectsource;
    }
}
