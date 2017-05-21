<li class="sub-menu">
    <a href="{!! route('backend.staff.index') !!}" class="nav-link nav-toggle {!! Request::is('staff*') ? 'active' : '' !!}">
        <i class="fa fa-user"></i>
        <span class="title">Staff</span>
    </a>
</li>
<li class="sub-menu">
    <a href="{!! url('backend.roles.index') !!}" class="nav-link nav-toggle {!! Request::is('roles*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Roles</span>
    </a>
</li>
<li class="sub-menu">
    <a href="{!! route('backend.teams.index') !!}" class="nav-link nav-toggle {!! Request::is('teams*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Teams</span>
    </a>
</li>
<li class="sub-menu">
    <a href="{!! url('backend.staffPermissions.index') !!}" class="nav-link nav-toggle {!! Request::is('staffPermissions*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffPermissions</span>
    </a>
</li>
<li class="sub-menu">
    <a href="{!! url('backend.rolePermissions.index') !!}" class="nav-link nav-toggle {!! Request::is('rolePermissions*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">RolePermissions</span>
    </a>
</li>
