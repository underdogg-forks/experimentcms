<?php

namespace Modules\Email\Repositories\Cache;

use Modules\Email\Repositories\MailboxRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMailboxDecorator extends BaseCacheDecorator implements MailboxRepository
{
    public function __construct(MailboxRepository $mailbox)
    {
        parent::__construct();
        $this->entityName = 'email.mailboxes';
        $this->repository = $mailbox;
    }
}
