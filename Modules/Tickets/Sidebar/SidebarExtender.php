<?php

namespace Modules\Tickets\Sidebar;

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
            $group->item(trans('tickets::tickets.title.tickets'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('tickets::tickets.title.tickets'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.ticket.create');
                    $item->route('admin.tickets.ticket.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.tickets.index')
                    );
                });
                $item->item(trans('tickets::ticketthreads.title.ticketthreads'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.ticketthread.create');
                    $item->route('admin.tickets.ticketthread.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.ticketthreads.index')
                    );
                });
                $item->item(trans('tickets::tickettypes.title.tickettypes'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.tickettype.create');
                    $item->route('admin.tickets.tickettype.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.tickettypes.index')
                    );
                });
                $item->item(trans('tickets::ticketstatuses.title.ticketstatuses'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.ticketstatus.create');
                    $item->route('admin.tickets.ticketstatus.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.ticketstatuses.index')
                    );
                });
                $item->item(trans('tickets::ticketpriorities.title.ticketpriorities'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.ticketpriority.create');
                    $item->route('admin.tickets.ticketpriority.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.ticketpriorities.index')
                    );
                });
                $item->item(trans('tickets::ticketsources.title.ticketsources'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tickets.ticketsource.create');
                    $item->route('admin.tickets.ticketsource.index');
                    $item->authorize(
                        $this->auth->hasAccess('tickets.ticketsources.index')
                    );
                });
// append






            });
        });

        return $menu;
    }
}
