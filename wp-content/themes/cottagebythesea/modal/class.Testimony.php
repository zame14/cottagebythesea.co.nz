<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/22/2018
 * Time: 10:19 AM
 */
class Testimony extends CottageBase
{
    public function getStatus()
    {
        return $this->getPostMeta('hide');
    }
}