<?php

namespace Modules\Tickets\Repositories\Cache;

use Modules\Tickets\Repositories\TicketStatusRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketStatusDecorator extends BaseCacheDecorator implements TicketStatusRepository
{
    public function __construct(TicketStatusRepository $ticketstatus)
    {
        parent::__construct();
        $this->entityName = 'tickets.ticketstatuses';
        $this->repository = $ticketstatus;
    }
}
