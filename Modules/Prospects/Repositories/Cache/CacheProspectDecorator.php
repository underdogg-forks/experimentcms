<?php

namespace Modules\Prospects\Repositories\Cache;

use Modules\Prospects\Repositories\ProspectRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProspectDecorator extends BaseCacheDecorator implements ProspectRepository
{
    public function __construct(ProspectRepository $prospect)
    {
        parent::__construct();
        $this->entityName = 'prospects.prospects';
        $this->repository = $prospect;
    }
}
