<?php

namespace Modules\Relations\Repositories\Cache;

use Modules\Relations\Repositories\RelationRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheRelationDecorator extends BaseCacheDecorator implements RelationRepository
{
    public function __construct(RelationRepository $relation)
    {
        parent::__construct();
        $this->entityName = 'relations.relations';
        $this->repository = $relation;
    }
}
