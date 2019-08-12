<?php

namespace Crm\DailyMaverickModule;

class DailyMaverickModule extends \Crm\ApplicationModule\CrmModule
{
    // register your extension points based on the documentation below
    public function registerFrontendMenuItems(\Crm\ApplicationModule\Menu\MenuContainerInterface $menuContainer)
    {
        $menuItem = new \Crm\ApplicationModule\Menu\MenuItem("Test1", ':DailyMaverick:DailyMaverick:Hello', '', 100);
        $menuContainer->attachMenuItem($menuItem);
    }

    public function registerAdminMenuItems(\Crm\ApplicationModule\Menu\MenuContainerInterface $menuContainer)
    {
        $mainMenu = new \Crm\ApplicationModule\Menu\MenuItem('', '#', 'fa fa-link', 800);

        $menuItem = new \Crm\ApplicationModule\Menu\MenuItem("Test", ':DailyMaverick:Hello:', 'fa fa-unlink', 200);
        $mainMenu->addChild($menuItem);

        $menuContainer->attachMenuItem($mainMenu);
    }
}