<style>
    h3  {
        border-bottom: 1px solid #eee;
    }
    .permission {
        padding: 6px 0 4px 0;
    }
</style>
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($permissions as $name => $value): ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{ ucfirst($name) }}</h3>
                    </div>
                </div>
                <?php foreach ($value as $subPermissionTitle => $permissionActions): ?>
                    <div class="permissionGroup">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="pull-left">{{ ucfirst($subPermissionTitle) }}</h4>
                                <p class="pull-right" style="margin-top: 10px;">
                                    <a href="" class="jsSelectAllAllow">{{ trans('auth::roles.allow all')}}</a> |
                                    <a href="" class="jsSelectAllDeny">{{ trans('auth::roles.deny all')}}</a> |
                                    <a href="" class="jsSelectAllInherit">{{ trans('auth::roles.inherit all')}}</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($permissionActions as $permissionAction => $permissionLabel): ?>
                                <div class="col-md-12">
                                    @include('auth::admin.partials.permission-part')
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
@include('auth::admin.partials.permissions-script')
