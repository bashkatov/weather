<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 14:21
 */

namespace bashkatov\weather\Interfaces;

interface Downloadable
{
    public function download($forecast);
}