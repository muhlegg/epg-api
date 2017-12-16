<?php

namespace MAF\EpgApi\Services;

class EpgService
{

    /**
     * EpgService constructor.
     */
    public function __construct() { }

    public function getFavorites()
    {
        $file = env('EPG_SOURCE');

        return [
            'channels' => [
                'channel_code' => [
                    'schedule...'
                ]
            ],
            'meta'     => [
                'source' => $file
            ]
        ];
    }

    public function update() { }

}