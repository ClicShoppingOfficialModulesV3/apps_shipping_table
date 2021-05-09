<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT
   * @licence MIT - Portion of osCommerce 2.4
   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\TA\Params;

  class cost extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
  {
    public $default = '25:8.50,50:5.50,10000:0.00';
    public $sort_order = 40;

    protected function init()
    {
      $this->title = $this->app->getDef('cfg_table_cost_title');
      $this->description = $this->app->getDef('cfg_table_cost_desc');
    }
  }
