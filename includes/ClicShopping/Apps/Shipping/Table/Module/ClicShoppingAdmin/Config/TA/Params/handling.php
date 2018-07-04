<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

  namespace ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\TA\Params;

  use ClicShopping\OM\HTML;

  class handling extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {

    public $default = '0';
    public $sort_order = 50;

    protected function init() {
      $this->title = $this->app->getDef('cfg_item_handling_title');
      $this->description = $this->app->getDef('cfg_item_handling_desc');
    }
  }
