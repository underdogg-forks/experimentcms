<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketTypeRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketTypeDecorator extends BaseCacheDecorator implements TicketTypeRepository
{
    public function __construct(TicketTypeRepository $tickettype)
    {
        parent::__construct();
        $this->entityName = 'tickets.tickettypes';
        $this->repository = $tickettype;
    }
}
