<?php

namespace Modules\Leads\Sidebar;

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
            $group->item(trans('leads::leads.title.leads'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('leads::leads.title.leads'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.leads.lead.create');
                    $item->route('admin.leads.lead.index');
                    $item->authorize(
                        $this->auth->hasAccess('leads.leads.index')
                    );
                });
                $item->item(trans('leads::leadstatuses.title.leadstatuses'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.leads.leadstatus.create');
                    $item->route('admin.leads.leadstatus.index');
                    $item->authorize(
                        $this->auth->hasAccess('leads.leadstatuses.index')
                    );
                });
                $item->item(trans('leads::leadsources.title.leadsources'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.leads.leadsource.create');
                    $item->route('admin.leads.leadsource.index');
                    $item->authorize(
                        $this->auth->hasAccess('leads.leadsources.index')
                    );
                });
// append



            });
        });

        return $menu;
    }
}
