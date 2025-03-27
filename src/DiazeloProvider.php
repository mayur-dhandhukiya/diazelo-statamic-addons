<?php

namespace Webby\Diazelo;

use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Carbon;
use Statamic\CP\Navigation\NavItem;
use Statamic\Events\EntryBlueprintFound;
use Statamic\Events\UserBlueprintFound;
use Statamic\Facades\Collection;
use Statamic\Facades\CP\Nav;
use Statamic\Facades\Permission;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Stache\Stache;
use Statamic\Statamic;

class DiazeloProvider extends AddonServiceProvider
{
    protected $config = false;

    protected $translations = false;

    protected $actions = [];

    protected $commands = [];

    protected $fieldtypes = [];

    protected $listen = [];

    protected $modifiers = [];

    protected $routes = [];

    protected $scopes = [];

    protected $tags = [];

    protected $updateScripts = [];

    protected $vite = [];

    protected $widgets = [];

    public function boot()
    {
        parent::boot();
    }

    protected function bootBlueprints()
    {
        return $this;
    }

    protected function bootVendorAssets()
    {
        return $this;
    }

    protected function bindContracts()
    {
        return $this;
    }

    protected function bootCartDrivers()
    {
        return $this;
    }

    protected function bootStacheStores()
    {
        return $this;
    }

    protected function createNavItems()
    {
        return $this;
    }

    protected function registerPermissions()
    {
        return $this;
    }

    protected function registerComputedValues()
    {
        
    }

    protected function isOrExtendsClass(string $class, string $classToCheckAgainst): bool
    {
        return is_subclass_of($class, $classToCheckAgainst)
            || $class === $classToCheckAgainst;
    }
}
