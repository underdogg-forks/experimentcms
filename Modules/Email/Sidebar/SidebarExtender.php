<?php

namespace Modules\Email\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Auth\Contracts\Authentication;

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
            $group->item(trans('email::mailboxes.title.mailboxes'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('email::mailboxes.title.mailboxes'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.email.mailbox.create');
                    $item->route('admin.email.mailbox.index');
                    $item->authorize(
                        $this->auth->hasAccess('email.mailboxes.index')
                    );
                });
                $item->item(trans('email::mailtypes.title.mailtypes'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.email.mailtype.create');
                    $item->route('admin.email.mailtype.index');
                    $item->authorize(
                        $this->auth->hasAccess('email.mailtypes.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
