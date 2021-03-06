<?php


namespace Okay\Core\Routes;


use Okay\Core\Routes\Strategies\Category\DefaultStrategy;
use Okay\Core\Routes\Strategies\Category\NoPrefixAndPathStrategy;
use Okay\Core\Routes\Strategies\Category\PrefixAndPathStrategy;
use Okay\Core\Routes\Strategies\Category\NoPrefixStrategy;

class CategoryRoute extends AbstractRoute
{
    const CATEGORY_ROUTE_TEMPLATE = 'category_routes_template';
    const TYPE_NO_PREFIX          = 'no_prefix';
    const TYPE_PREFIX_AND_PATH    = 'prefix_and_path';
    const TYPE_NO_PREFIX_AND_PATH = 'no_prefix_and_path';
    const SLASH_END               = 'category_routes_template_slash_end';

    protected static $useSqlToGenerate;
    
    protected static $routeAliases;
    
    public function hasSlashAtEnd()
    {
        return intval($this->settings->get(static::SLASH_END)) === 1 && $this->hasNoFilters();
    }

    protected function getStrategy()
    {
        if (static::TYPE_NO_PREFIX_AND_PATH === $this->settings->get(static::CATEGORY_ROUTE_TEMPLATE)) {
            return new NoPrefixAndPathStrategy();
        }

        if (static::TYPE_PREFIX_AND_PATH === $this->settings->get(static::CATEGORY_ROUTE_TEMPLATE)) {
            return new PrefixAndPathStrategy();
        }

        if (static::TYPE_NO_PREFIX === $this->settings->get(static::CATEGORY_ROUTE_TEMPLATE)) {
            return new NoPrefixStrategy();
        }

        return new DefaultStrategy();
    }

    private function hasNoFilters()
    {
        return empty($this->params[1]);
    }
}