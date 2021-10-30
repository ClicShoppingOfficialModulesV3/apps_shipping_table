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

  namespace ClicShopping\Apps\Shipping\Table\Sites\ClicShoppingAdmin\Pages\Home;

  use ClicShopping\OM\Registry;

  use ClicShopping\Apps\Shipping\Table\Table;

  class Home extends \ClicShopping\OM\PagesAbstract
  {
    public mixed $app;

    protected function init()
    {
      $CLICSHOPPING_Table = new Table();
      Registry::set('Table', $CLICSHOPPING_Table);

      $this->app = $CLICSHOPPING_Table;

      $this->app->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }
