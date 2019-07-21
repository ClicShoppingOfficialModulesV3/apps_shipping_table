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

  use ClicShopping\OM\HTML;

  class handling extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
  {

    public $default = '0';
    public $sort_order = 50;

    protected function init()
    {
      $this->title = $this->app->getDef('cfg_item_handling_title');
      $this->description = $this->app->getDef('cfg_item_handling_desc');
    }
  }
