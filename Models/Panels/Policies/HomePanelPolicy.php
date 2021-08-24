<?php

namespace Modules\Amazon\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;

class HomePanelPolicy extends XotBasePanelPolicy {
    public function test(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
