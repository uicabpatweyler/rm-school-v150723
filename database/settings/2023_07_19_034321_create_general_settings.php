<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('generalSetting.app_name', 'RM-SCHOOL');
        $this->migrator->add('generalSetting.organization_name', 'Unassigned');
        $this->migrator->add('generalSetting.organization_description', 'Unassigned');
        $this->migrator->add('generalSetting.school_cycle_current', 'Unassigned');
        /* Locale for carbon */
        $this->migrator->add('generalSetting.lang_for_date', 'es_MX');
        /*Timezone for carbon */
        $this->migrator->add('generalSetting.tz_for_date_hour', 'America/Cancun');

    }
};
