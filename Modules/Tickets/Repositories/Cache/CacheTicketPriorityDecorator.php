<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketPriorityRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketPriorityDecorator extends BaseCacheDecorator implements TicketPriorityRepository
{
    public function __construct(TicketPriorityRepository $ticketpriority)
    {
        parent::__construct();
        $this->entityName = 'tickets.ticketpriorities';
        $this->repository = $ticketpriority;
    }
}
