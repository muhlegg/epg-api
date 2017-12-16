<?php
/**
 * EpgController.php
 * Author: Filip Holmberg <filip@mobiilimarkkinointirouta.fi>
 * Created: 16/12/2017 14.03
 */

namespace MAF\EpgApi\Http\Controllers;

use MAF\EpgApi\Services\EpgService;

class EpgController extends Controller
{
    /** @var EpgService */
    private $Service;

    /**
     * EpgController constructor.
     *
     * @param EpgService $Service
     */
    public function __construct(EpgService $Service)
    {
        $this->Service = $Service;
    }

    public function favorites()
    {
        return $this->Service->getFavorites();
    }
}