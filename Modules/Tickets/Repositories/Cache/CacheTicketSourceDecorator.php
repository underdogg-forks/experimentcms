<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketSourceRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketSourceDecorator extends BaseCacheDecorator implements TicketSourceRepository
{
    public function __construct(TicketSourceRepository $ticketsource)
    {
        parent::__construct();
        $this->entityName = 'tickets.ticketsources';
        $this->repository = $ticketsource;
    }
}
