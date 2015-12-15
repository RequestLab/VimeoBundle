<?php

namespace RequestLab\VimeoBundle\Service;

use Vimeo\Vimeo;

/**
 * Class VimeoService
 *
 * @package RequestLab\VimeoBundle\Service
 */
class VimeoService extends Vimeo
{

    /**
     * VimeoService constructor.
     *
     * @param string $client_id
     * @param string $client_secret
     * @param null $access_token
     */
    public function __construct($client_id, $client_secret, $access_token = null)
    {
        parent::__construct($client_id, $client_secret, $access_token);
    }

}