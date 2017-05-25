<?php

namespace Modules\Email\Repositories\Cache;

use Modules\Email\Repositories\MailBoxTypeRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMailBoxTypeDecorator extends BaseCacheDecorator implements MailBoxTypeRepository
{
    public function __construct(MailBoxTypeRepository $mailboxtype)
    {
        parent::__construct();
        $this->entityName = 'email.mailboxtypes';
        $this->repository = $mailboxtype;
    }
}
