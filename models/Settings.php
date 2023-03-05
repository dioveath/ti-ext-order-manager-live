<?php

namespace Charicha\AppCompanion\Models;

use Igniter\Flame\Database\Model;


class Settings extends Model
{
    public $implement = [\System\Actions\SettingsModel::class];
    public $settingsCode = 'charicha_appcompanion_settings';
    public $settingsFieldsConfig = 'settings';

    public static function getDomain()
    {
        return self::get('domain');
    }

    public static function isStaging()
    {
        return self::get('is_live') === 'staging';
    }

    public function afterSave()
    {
        // post the domain to the api        

    }

    public function onReset()
    {
        self::set('is_live', 'staging');
        self::set('domain', url(''));
        self::save();
    }
}

?>