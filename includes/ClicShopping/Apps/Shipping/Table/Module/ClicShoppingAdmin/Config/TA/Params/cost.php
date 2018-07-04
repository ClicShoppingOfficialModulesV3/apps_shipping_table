<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

  namespace ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\TA\Params;

  class cost extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {
    public $default = '25:8.50,50:5.50,10000:0.00';
    public $sort_order = 40;

    protected function init() {
      $this->title = $this->app->getDef('cfg_table_cost_title');
      $this->description = $this->app->getDef('cfg_table_cost_desc');
    }
  }
