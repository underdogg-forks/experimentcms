<?php

namespace Modules\Media\Events;

use Modules\Media\Models\File;

class FileWasUploaded
{
    /**
     * @var File
     */
    public $file;

    /**
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }
}
