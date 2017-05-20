<?php

namespace Modules\Prospects\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
//use Modules\Auth\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('prospects::prospects.title.prospects'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('prospects::prospects.title.prospects'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.prospects.prospect.create');
                    $item->route('admin.prospects.prospect.index');
                    $item->authorize(
                        $this->auth->hasAccess('prospects.prospects.index')
                    );
                });
                $item->item(trans('prospects::prospectstatuses.title.prospectstatuses'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.prospects.prospectstatus.create');
                    $item->route('admin.prospects.prospectstatus.index');
                    $item->authorize(
                        $this->auth->hasAccess('prospects.prospectstatuses.index')
                    );
                });
                $item->item(trans('prospects::prospectsources.title.prospectsources'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.prospects.prospectsource.create');
                    $item->route('admin.prospects.prospectsource.index');
                    $item->authorize(
                        $this->auth->hasAccess('prospects.prospectsources.index')
                    );
                });
// append



            });
        });

        return $menu;
    }
}
