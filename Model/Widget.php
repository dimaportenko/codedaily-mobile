<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:45 PM
 */

namespace CodeDaily\Mobile\Model;

/**
 * @method \CodeDaily\Mobile\Model\ResourceModel\Widget getResource()
 * @method \CodeDaily\Mobile\Model\ResourceModel\Widget\Collection getCollection()
 */
class Widget extends \Magento\Framework\Model\AbstractModel implements \CodeDaily\Mobile\Api\Data\WidgetInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'codedaily_mobile_widget';
    protected $_cacheTag = 'codedaily_mobile_widget';
    protected $_eventPrefix = 'codedaily_mobile_widget';

    protected function _construct()
    {
        $this->_init('CodeDaily\Mobile\Model\ResourceModel\Widget');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}