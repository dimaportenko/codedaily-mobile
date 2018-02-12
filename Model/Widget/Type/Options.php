<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/13/18
 * Time: 12:55 AM
 */

namespace CodeDaily\Mobile\Model\Widget\Type;

use Magento\Framework\Data\OptionSourceInterface;
use CodeDaily\Mobile\Model\ResourceModel\Widget\Type\CollectionFactory;

/**
 * Core System Store Model
 */
class Options extends \Magento\Framework\DataObject implements OptionSourceInterface
{
    private $collection;
    /**
     * Init model
     * Load Website, Group and Store collections
     *
     * @param \CodeDaily\Mobile\Model\ResourceModel\Widget\Type\CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        parent::__construct($data);
        $this->collection = $collectionFactory->create();
    }



    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        $array = [];
        foreach ($this->collection as $item) {
            $array[] = [
                'value' => $item->getId(),
                'label' => $item->getLabel()
            ];
        }
        return $array;
    }
}
