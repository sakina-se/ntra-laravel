<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\AdResource;
use App\MoonShine\Resources\BranchResource;
use App\MoonShine\Resources\StatusResource;
use App\MoonShine\Resources\UserResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

            MenuItem::make('Asosiy sahifa', url('/'))->icon('heroicons.home')->customLinkAttributes(['target' => '_blank']),
            MenuItem::make("E'lonlar", new AdResource())->icon('heroicons.megaphone'),
            MenuItem::make("Filiallar", new BranchResource())->icon('heroicons.building-office'),
            MenuItem::make("Statuslar", new StatusResource())->icon('heroicons.check-circle'),
            MenuItem::make("Foydalanuvchilar", new UserResource())->icon('heroicons.user'),
            MenuItem::make("Foydalanuvchilar", new UserResource())->icon('heroicons.user'),


//            MenuItem::make('Documentation', 'https://moonshine-laravel.com/docs')
//                ->badge(fn() => 'Check')
//                ->blank(),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
