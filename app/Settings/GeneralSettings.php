<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $app_name;
    public string $organization_name;
    public string $organization_description;
    public string $school_cycle_current;
    public string $lang_for_date;
    public string $tz_for_date_hour;


    public static function group(): string
    {
        return 'generalSetting';
    }
}
