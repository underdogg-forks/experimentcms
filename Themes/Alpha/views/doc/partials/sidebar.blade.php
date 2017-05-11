<ul class="side-menu">
    <li class="header">
        <i class="fa fa-home"></i>
        Getting Started
    </li>
    <li class="{{ Request::is('*/getting-started/installation') ? 'active' : ''}}">
        <a href="{{ url('docs/getting-started/installation') }}">Installation</a>
    </li>
    <li class="{{ Request::is('*/getting-started/contributing') ? 'active' : ''}}">
        <a href="{{ url('docs/getting-started/contributing') }}">Contributing</a>
    </li>
    <li class="{{ Request::is('*/getting-started/used-technology') ? 'active' : ''}}">
        <a href="{{ url('docs/getting-started/used-technology') }}">Used technology</a>
    </li>
    <li class="header">
        <i class="fa fa-bolt"></i>
        Core Module
    </li>
    <li class="{{ Request::is('*/core-module/configuration') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/configuration') }}">Configuration</a>
    </li>
    <li class="{{ Request::is('*/core-module/navigation') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/navigation') }}">Navigation</a>
    </li>
    <li class="{{ Request::is('*/core-module/permissions') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/permissions') }}">Permissions</a>
    </li>
    <li class="{{ Request::is('*/core-module/repositories') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/repositories') }}">Repositories</a>
    </li>
    <li class="{{ Request::is('*/core-module/assetmanager') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/assetmanager') }}">Asset Manager</a>
    </li>
    <li class="{{ Request::is('*/core-module/helpers') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/helpers') }}">Helpers</a>
    </li>
    <li class="{{ Request::is('*/core-module/form-macros') ? 'active' : ''}}">
        <a href="{{ url('docs/core-module/form-macros') }}">Form macros</a>
    </li>
    <li class="header">
        <i class="fa fa-tachometer"></i>
        Dashboard Module
    </li>
    <li class="{{ Request::is('*/dashboard-module/widgets') ? 'active' : ''}}">
        <a href="{{ url('docs/dashboard-module/widgets') }}">Widgets</a>
    </li>
    <li class="header">
        <i class="fa fa-file-image-o"></i>
        Media Module
    </li>
    <li class="{{ Request::is('*/media-module/configuration') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/configuration') }}">Configuration</a>
    </li>
    <li class="{{ Request::is('*/media-module/thumbnails') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/thumbnails') }}">Thumbnails</a>
    </li>
    <li class="{{ Request::is('*/media-module/getting-a-thumbnail') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/getting-a-thumbnail') }}">Getting a thumbnail</a>
    </li>
    <li class="{{ Request::is('*/media-module/refreshing-thumbnails') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/refreshing-thumbnails') }}">Refreshing thumbnails</a>
    </li>
    <li class="{{ Request::is('*/media-module/events') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/events') }}">Events</a>
    </li>
    <li class="{{ Request::is('*/media-module/relations') ? 'active' : ''}}">
        <a href="{{ url('docs/media-module/relations') }}">Relations</a>
    </li>
    <li class="header">
        <i class="fa fa-bars"></i>
        Menu Module
    </li>
    <li class="{{ Request::is('*/menu-module/managing-menus') ? 'active' : ''}}">
        <a href="{{ url('docs/menu-module/managing-menus') }}">Managing menus</a>
    </li>
    <li class="{{ Request::is('*/menu-module/displaying-menus') ? 'active' : ''}}">
        <a href="{{ url('docs/menu-module/displaying-menus') }}">Displaying menus</a>
    </li>
    <li class="header">
        <i class="fa fa-cogs"></i>
        Setting Module
    </li>
    <li class="{{ Request::is('*/setting-module/adding-settings') ? 'active' : ''}}">
        <a href="{{ url('docs/setting-module/adding-settings') }}">Adding settings</a>
    </li>
    <li class="{{ Request::is('*/setting-module/available-fields') ? 'active' : ''}}">
        <a href="{{ url('docs/setting-module/available-fields') }}">Available fields</a>
    </li>
    <li class="{{ Request::is('*/setting-module/custom-fields') ? 'active' : ''}}">
        <a href="{{ url('docs/setting-module/custom-fields') }}">Custom fields</a>
    </li>
    <li class="{{ Request::is('*/setting-module/reading-settings') ? 'active' : ''}}">
        <a href="{{ url('docs/setting-module/reading-settings') }}">Reading settings</a>
    </li>
    <li class="{{ Request::is('*/setting-module/events') ? 'active' : ''}}">
        <a href="{{ url('docs/setting-module/events') }}">Events</a>
    </li>
    <li class="header">
        <i class="fa fa-picture-o"></i>
        Themes
    </li>
    <li class="{{ Request::is('*/themes/usage') ? 'active' : ''}}">
        <a href="{{ url('docs/themes/usage') }}">Creating a theme</a>
    </li>
    <li class="header">
        <i class="fa fa-user"></i>
        User Module
    </li>
    <li class="{{ Request::is('*/user-module/configuration') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/configuration') }}">Configuration</a>
    </li>
    <li class="{{ Request::is('*/user-module/drivers') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/drivers') }}">Drivers</a>
    </li>
    <li class="{{ Request::is('*/user-module/users') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/users') }}">Users</a>
    </li>
    <li class="{{ Request::is('*/user-module/events') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/events') }}">Events</a>
    </li>
    <li class="{{ Request::is('*/user-module/middleware') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/middleware') }}">Middleware</a>
    </li>
    <li class="{{ Request::is('*/user-module/adding-additional-user-data') ? 'active' : ''}}">
        <a href="{{ url('docs/user-module/adding-additional-user-data') }}">Adding additional user data</a>
    </li>
    <li class="header">
        <i class="fa fa-cogs"></i>
        Workshop Module
    </li>
    <li class="{{ Request::is('*/workshop-module/module-scaffold') ? 'active' : ''}}">
        <a href="{{ url('docs/workshop-module/module-scaffold') }}">Creating a module</a>
    </li>
    <li class="{{ Request::is('*/workshop-module/theme-scaffold') ? 'active' : ''}}">
        <a href="{{ url('docs/workshop-module/theme-scaffold') }}">Creating a theme</a>
    </li>
</ul>
