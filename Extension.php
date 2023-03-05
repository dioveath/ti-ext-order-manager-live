<?php namespace Charicha\AppCompanion;

use Charicha\AppCompanion\Classes\Manager;
use System\Classes\BaseExtension;

/**
 * AppCompanion Extension Information File
 */
class Extension extends BaseExtension
{
    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {
        try {
            Manager::instance()->syncWithAppServer();
        } catch (\Exception $e) {
            // log the error
            log_message('error', $e);
            // throw $e;
        }        
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
        // Remove this line and uncomment the line below to activate
        //    'Charicha\AppCompanion\Components\Settings' => 'settingsComponent',
        ];
    }

    /**
     * Registers any admin permissions used by this extension.
     *
     * @return array
     */
    public function registerPermissions()
    {
// Remove this line and uncomment block to activate
        return [
//            'Charicha.AppCompanion.SomePermission' => [
//                'description' => 'Some permission',
//                'group' => 'module',
//            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'settings' => [
                'priority'    => 100,
                'title'       => 'App Companion',
                'label'       => 'App Companion Menu',
                'description' => 'Manage App Companion',
                'icon'        => 'fa fa-mobile',                
                'child'       => [
                    'settings' => [
                        'title'      => 'Setup',
                        'href'       => admin_url('extensions/edit/charicha/appcompanion/settings'),
                        'description' => 'Setup & Initialize App Companion',
                        'icon'       => 'fa fa-cog',                        
                    ]
                ]
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'AppCompanion Settings',
                'description' => 'Manage App Companion',
                'icon'        => 'fa fa-mobile',
                'model'       => \Charicha\AppCompanion\Models\Settings::class,
            ]
        ];
    }
}
