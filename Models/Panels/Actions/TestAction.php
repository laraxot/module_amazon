<?php

namespace Modules\Amazon\Models\Panels\Actions;

//-------- models -----------

//-------- services --------
use Modules\Amazon\Facades\AmazonProduct;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class TestAction.
 */
class TestAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onItem = true;
    /**
     * @var bool
     */
    public bool $onContainer = true;

    /**
     * @return mixed
     */
    public function handle() {
        $response = AmazonProduct::search('All', 'amazon', 1);
        dddx($response);
    }
}
