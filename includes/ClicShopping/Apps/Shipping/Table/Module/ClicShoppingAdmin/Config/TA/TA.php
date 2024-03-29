<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\TA;

  class TA extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigAbstract
  {

    protected $pm_code = 'Table';

    public bool $is_uninstallable = true;
    public ?int $sort_order = 400;

    protected function init()
    {
      $this->title = $this->app->getDef('module_table_title');
      $this->short_title = $this->app->getDef('module_table_short_title');
      $this->introduction = $this->app->getDef('module_table_introduction');
      $this->is_installed = \defined('CLICSHOPPING_APP_TABLE_TA_STATUS') && (trim(CLICSHOPPING_APP_TABLE_TA_STATUS) != '');
    }

    public function install()
    {
      parent::install();

      if (\defined('MODULE_SHIPPING_INSTALLED')) {
        $installed = explode(';', MODULE_SHIPPING_INSTALLED);
      }

      $installed[] = $this->app->vendor . '\\' . $this->app->code . '\\' . $this->code;

      $this->app->saveCfgParam('MODULE_SHIPPING_INSTALLED', implode(';', $installed));
    }

    public function uninstall()
    {
      parent::uninstall();

      $installed = explode(';', MODULE_SHIPPING_INSTALLED);
      $installed_pos = array_search($this->app->vendor . '\\' . $this->app->code . '\\' . $this->code, $installed);

      if ($installed_pos !== false) {
        unset($installed[$installed_pos]);

        $this->app->saveCfgParam('MODULE_SHIPPING_INSTALLED', implode(';', $installed));
      }
    }
  }