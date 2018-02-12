<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:52 PM
 */

namespace CodeDaily\Mobile\Model\Widget;

/**
 * @method \CodeDaily\Mobile\Model\ResourceModel\Widget\Type getResource()
 * @method \CodeDaily\Mobile\Model\ResourceModel\Widget\Type\Collection getCollection()
 */
class Type extends \Magento\Framework\Model\AbstractModel implements \CodeDaily\Mobile\Api\Data\Widget\TypeInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'codedaily_mobile_type';
    protected $_cacheTag = 'codedaily_mobile_type';
    protected $_eventPrefix = 'codedaily_mobile_type';

    protected function _construct()
    {
        $this->_init('CodeDaily\Mobile\Model\ResourceModel\Widget\Type');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return $this->getStoreValuesForForm();
    }
}