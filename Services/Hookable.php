<?php

declare(strict_types=1);

namespace Modules\Amazon\Services;

trait Hookable {
    /**
     * @var array
     */
    protected $hooks = [];

    /**
     * Add hook.
     *
     * @return void
     */
    public function hook(string $name, callable $hook) {
        $this->hooks[$name] = $hook;
    }

    /**
     * @return bool
     */
    public function hasHook(string $name) {
        return isset($this->hooks[$name]);
    }

    /**
     * @param  $request
     *
     * @return mixed
     */
    public function callHook(string $name, $request) {
        if (! $this->hasHook($name)) {
            return $request;
        }

        $hook = $this->hooks[$name];

        return call_user_func($hook, $request);
    }
}
