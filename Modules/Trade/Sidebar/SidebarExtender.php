<?php

namespace Modules\Trade\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\User\Contracts\Authentication;

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
            $group->item(trans('trade::salesorders.title.salesorders'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('trade::salesorders.title.salesorders'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.trade.salesorder.create');
                    $item->route('admin.trade.salesorder.index');
                    $item->authorize(
                        $this->auth->hasAccess('trade.salesorders.index')
                    );
                });
                $item->item(trans('trade::purchaseorders.title.purchaseorders'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.trade.purchaseorder.create');
                    $item->route('admin.trade.purchaseorder.index');
                    $item->authorize(
                        $this->auth->hasAccess('trade.purchaseorders.index')
                    );
                });
                $item->item(trans('trade::products.title.products'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.trade.product.create');
                    $item->route('admin.trade.product.index');
                    $item->authorize(
                        $this->auth->hasAccess('trade.products.index')
                    );
                });
                $item->item(trans('trade::productcategories.title.productcategories'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.trade.productcategory.create');
                    $item->route('admin.trade.productcategory.index');
                    $item->authorize(
                        $this->auth->hasAccess('trade.productcategories.index')
                    );
                });
                $item->item(trans('trade::producttypes.title.producttypes'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.trade.producttype.create');
                    $item->route('admin.trade.producttype.index');
                    $item->authorize(
                        $this->auth->hasAccess('trade.producttypes.index')
                    );
                });
// append





            });
        });

        return $menu;
    }
}
