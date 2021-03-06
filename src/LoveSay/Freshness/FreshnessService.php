<?php

namespace LoveSay\Freshness;

use LoveSay\Note;

interface FreshnessService
{
    /**
     * @param Note $note
     *
     * @return boolean
     */
    public function isFresh(Note $note);
}
 