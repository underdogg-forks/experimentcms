<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketThreadRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketThreadDecorator extends BaseCacheDecorator implements TicketThreadRepository
{
    public function __construct(TicketThreadRepository $ticketthread)
    {
        parent::__construct();
        $this->entityName = 'tickets.ticketthreads';
        $this->repository = $ticketthread;
    }
}
