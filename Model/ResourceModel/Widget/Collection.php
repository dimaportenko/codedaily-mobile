<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:45 PM
 */

namespace CodeDaily\Mobile\Model\ResourceModel\Widget;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';


    protected function _construct()
    {
        $this->_init('CodeDaily\Mobile\Model\Widget', 'CodeDaily\Mobile\Model\ResourceModel\Widget');
    }

}