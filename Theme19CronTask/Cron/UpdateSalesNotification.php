<?php 
namespace Perspective\Theme19CronTask\Cron; 
 
use Magento\Framework\App\Config\ScopeConfigInterface; 
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as OrderCollectionFactory;

use Magento\Framework\View\Element\Block\ArgumentInterface;
 
class UpdateSalesNotification implements ArgumentInterface
{ 
    protected $messageFactory; 
    protected $orderCollectionFactory; 
    protected $scopeConfig; 
 
    public function __construct( 
        OrderCollectionFactory $orderCollectionFactory, 
        ScopeConfigInterface $scopeConfig 
    ) { 
        $this->orderCollectionFactory = $orderCollectionFactory; 
        $this->scopeConfig = $scopeConfig; 
    } 
 
/*     public function execute() 
    { 
        $startTime = strtotime('00:00:00'); 
        $endTime = strtotime('now'); 
 
        $orderCollection = $this->orderCollectionFactory->create(); 
        $orderCollection->addFieldToFilter('created_at', ['from' => date('Y-m-d H:i:s', $startTime), 'to' => date('Y-m-d H:i:s', $endTime)]); 
 
        $numOfSales = $orderCollection->count(); 
 
        if ($numOfSales > 0) { 
            $messageText = "{$numOfSales} успешных продаж на сегодня."; 
            $this->createNotification($messageText); 
        } 
    } 
 
    protected function createNotification($messageText) 
    { 
        $message = $this->messageFactory->create(); 
        $message->setText($messageText); 
        $message->setSeverity(MessageInterface::SEVERITY_NOTICE); 
 
        $this->scopeConfig->setValue('admin/system/messages/Perspective_Theme19CronTask', $message->toString()); 
    }  */

    public function Test()
    {
        return "test2";
    }
}