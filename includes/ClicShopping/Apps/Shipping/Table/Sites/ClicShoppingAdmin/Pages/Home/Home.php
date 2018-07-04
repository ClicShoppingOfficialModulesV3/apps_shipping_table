<?php
/*
 * Home.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
*/

  namespace ClicShopping\Apps\Shipping\Table\Sites\ClicShoppingAdmin\Pages\Home;

  use ClicShopping\OM\Registry;

  use ClicShopping\Apps\Shipping\Table\Table;

  class Home extends \ClicShopping\OM\PagesAbstract {
    public $app;

    protected function init() {
      $CLICSHOPPING_Table = new Table();
      Registry::set('Table', $CLICSHOPPING_Table);

      $this->app = $CLICSHOPPING_Table;

      $this->app->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }