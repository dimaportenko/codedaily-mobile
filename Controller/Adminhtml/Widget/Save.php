<?php

namespace CodeDaily\Mobile\Controller\Adminhtml\Widget;

use Magento\Backend\App\Action;
use CodeDaily\Mobile\Model\WidgetFactory;

class Save extends Action
{
    private $itemFactory;

    public function __construct(
        Action\Context $context,
        WidgetFactory $itemFactory
    )
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();

        return $this->resultRedirectFactory->create()->setPath('codedaily/home/index');
    }
}