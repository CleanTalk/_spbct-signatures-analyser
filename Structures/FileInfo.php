<?php

namespace CleantalkSP\Common\Scanner\SpbctSignaturesAnalyser\Structures;

class FileInfo
{
    /**
     * @var string
     */
    public $path;

    /**
     * hash_file()
     * @see https://www.php.net/manual/function.hash-file.php
     * @var string
     */
    public $full_hash;

    /**
     * @var array|string array or json
     */
    public $weak_spots;

    public function __construct($path, $full_hash, $weak_spots = '')
    {
        $this->path = $path;
        $this->full_hash = $full_hash;
        if ( $weak_spots ) {
            $this->weak_spots = $weak_spots;
        }
    }
}
