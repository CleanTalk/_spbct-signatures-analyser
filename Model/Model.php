<?php

namespace CleantalkSP\Common\Scanner\SpbctSignaturesAnalyser\Model;

abstract class Model
{
    /**
     * @return array
     */
    abstract public function getSignatures();

    /**
     * @return string
     */
    abstract public function getRootPath();
}
