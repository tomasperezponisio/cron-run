<?php

namespace Movistar\CronRun\Controller\Adminhtml\System\Config;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Movistar\AdminExports\Cron\ProcessExportForAnalysisPendingOrders;
//use Movistar\CustomerManagementFlow\Cron\OrderPay;

class Run extends Action
{
    private ProcessExportForAnalysisPendingOrders $analysisPendingOrder;
    //private $orderPay;

    public function __construct
    (
        Context $context,
        ProcessExportForAnalysisPendingOrders $analysisPendingOrders,
        //OrderPay $orderPay,
        //private \Movistar\CustomerManagementFlow\Cron\CreateContact $createContact,
        //private \Movistar\CustomerManagementFlow\Cron\ContactExistenceVerification $contactExistenceVerification,
        //private \Movistar\CustomerManagementFlow\Cron\SubmitOrder $submitOrder
    )
    {
        parent::__construct($context);
        $this->analysisPendingOrder = $analysisPendingOrders;
        //$this->orderPay = $orderPay;
    }

    public function execute(): void
    {
        //$this->createContact->execute();
        $this->analysisPendingOrder->execute();
        //$this->orderPay->execute();
        //$this->contactExistenceVerification->execute();
        //$this->submitOrder->execute();
    }

}
