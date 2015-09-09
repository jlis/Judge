<?php

namespace jlis\Judge\Voters;

use Illuminate\Support\Facades\Config;
use jlis\Judge\Contracts\VoterInterface;

/**
 * @author Julius Ehrlich <julius@ehrlich-bros.de>
 */
class DebugVoter implements VoterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function vote($parameter = null, $user = null, array $additional = [])
    {
        if (empty($parameter)) {
            return false;
        }

        return Config::get('debug') === (bool) $parameter;
    }
}