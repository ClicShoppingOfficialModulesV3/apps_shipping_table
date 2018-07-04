<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\TA\Params;

use ClicShopping\OM\HTML;

class zone extends \ClicShopping\Apps\Shipping\Table\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {
    public $default = '0';
    public $sort_order = 250;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_table_zone_title');
        $this->description = $this->app->getDef('cfg_table_zone_desc');
    }

    public function getInputField() {
      $zone_class_array = [
                            [
                              'id' => '0',
                              'text' => $this->app->getDef('cfg_table_zone_none')
                            ]
                          ];

      $Qclasses = $this->app->db->get('geo_zones', [
                                                    'geo_zone_id',
                                                    'geo_zone_name'
                                                    ], null, 'geo_zone_name'
                                     );

      while ($Qclasses->fetch()) {
          $zone_class_array[] = [
                                  'id' => $Qclasses->valueInt('geo_zone_id'),
                                  'text' => $Qclasses->value('geo_zone_name')
                                ];
      }

      $input = HTML::selectField($this->key, $zone_class_array, $this->getInputValue());

      return $input;
    }
}
