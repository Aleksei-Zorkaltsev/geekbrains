<?php


namespace App\Contract;


interface Parser
{
    /**
     * @param string $link
     * @return array
     */
    public function parse($link);
}
