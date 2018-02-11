<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/11/18
 * Time: 8:09 PM
 */

namespace CodeDaily\Mobile\Controller\Adminhtml\Home;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
