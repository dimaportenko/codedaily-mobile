<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:52 PM
 */

namespace CodeDaily\Mobile\Model\ResourceModel\Widget;

class Type extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('codedaily_home_widget_type', 'type_id');
    }

}