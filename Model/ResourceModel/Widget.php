<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:45 PM
 */

namespace CodeDaily\Mobile\Model\ResourceModel;

class Widget extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('codedaily_home_widget', 'id');
    }

}