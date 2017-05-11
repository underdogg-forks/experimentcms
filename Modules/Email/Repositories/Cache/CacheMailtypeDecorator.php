<?php

namespace Modules\Email\Repositories\Cache;

use Modules\Email\Repositories\MailtypeRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMailtypeDecorator extends BaseCacheDecorator implements MailtypeRepository
{
    public function __construct(MailtypeRepository $mailtype)
    {
        parent::__construct();
        $this->entityName = 'email.mailtypes';
        $this->repository = $mailtype;
    }
}
