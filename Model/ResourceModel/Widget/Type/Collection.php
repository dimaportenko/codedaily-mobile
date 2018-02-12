<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:52 PM
 */

namespace CodeDaily\Mobile\Model\ResourceModel\Widget\Type;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'type_id';


    protected function _construct()
    {
        $this->_init('CodeDaily\Mobile\Model\Widget\Type', 'CodeDaily\Mobile\Model\ResourceModel\Widget\Type');
    }

}