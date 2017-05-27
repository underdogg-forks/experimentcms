<?php

function loging($context, $message, $level = 'error', $array = [])
{
    \Log::$level($message.':-:-:-'.$context, $array);
}

function checkArray($key, $array)
{
    $value = '';
    if (array_key_exists($key, $array)) {
        $value = $array[$key];
    }

    return $value;
}

function mime($type)
{
    if ($type == 'jpg' ||
            $type == 'png' ||
            $type == 'PNG' ||
            $type == 'JPG' ||
            $type == 'jpeg' ||
            $type == 'JPEG' ||
            $type == 'gif' ||
            $type == 'GIF' ||
            $type == 'image/jpeg' ||
            $type == 'image/jpg' ||
            $type == 'image/gif' ||
           // $type == "application/octet-stream" ||
            $type == 'image/png' ||
            starts_with($type, 'image')) {
        return 'image';
    }
}

function removeUnderscore($string)
{
    if (str_contains($string, '_') === true) {
        $string = str_replace('_', ' ', $string);
    }

    return ucfirst($string);
}

function isItil()
{
    $check = false;
    if (\Schema::hasTable('sd_releases') && \Schema::hasTable('sd_changes') && \Schema::hasTable('sd_problem')) {
        $check = true;
    }

    return $check;
}

function isAsset()
{
    $check = false;
    if (\Schema::hasTable('sd_assets')) {
        $check = true;
    }

    return $check;
}

function itilEnabled()
{
    $check = false;
    if (\Schema::hasTable('common_settings')) {
        $settings = \DB::table('common_settings')->where('option_name', 'itil')->first();
        if ($settings && $settings->status == 1) {
            $check = true;
        }
    }

    return $check;
}

function isBill()
{
    $check = false;
    if (\Schema::hasTable('common_settings')) {
        $settings = \DB::table('common_settings')->where('option_name', 'bill')->first();
        if ($settings && $settings->status == 1) {
            $check = true;
        }
    }

    return $check;
}

function deletePopUp($id, $url, $title = 'Delete', $class = 'btn btn-sm btn-danger', $btn_name = 'Delete', $button_check = true)
{
    $button = '';
    if ($button_check == true) {
        $button = '<a href="#delete" class="'.$class.'" data-toggle="modal" data-target="#delete'.$id.'">'.$btn_name.'</a>';
    }

    return $button.'<div class="modal fade" id="delete'.$id.'">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">'.$title.'</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-md-12">
                                <p>Are you sure ?</p>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <a href="'.$url.'" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>';
}

function isInstall()
{
    $check = false;
    $env = base_path('.env');
    if (\File::exists($env) && env('DB_INSTALL') == 1) {
        $check = true;
    }

    return $check;
}

function faveotime($date, $hour = 0, $min = 0, $sec = 0)
{
    if (is_bool($hour) && $hour == true) {
        $hour = $date->hour;
    }
    if (is_bool($min) && $min == true) {
        $min = $date->minute;
    }
    if (is_bool($sec) && $sec == true) {
        $sec = $date->second;
    }
    $date1 = \Carbon\Carbon::create($date->year, $date->month, $date->day, $hour, $min, $sec);

    return $date1->hour($hour)->minute($min)->second($sec);
}
