<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketDecorator extends BaseCacheDecorator implements TicketRepository
{
    public function __construct(TicketRepository $ticket)
    {
        parent::__construct();
        $this->entityName = 'tickets.tickets';
        $this->repository = $ticket;
    }
}
