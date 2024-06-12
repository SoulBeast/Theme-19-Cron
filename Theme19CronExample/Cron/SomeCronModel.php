<?php
namespace Perspective\Theme19CronExample\Cron;

class SomeCronModel
{
    protected $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }
    
    /**
     * Method executed when cron runs in server
     */
    public function execute() {
        $this->_logger->debug('Running Cron from SomeCronModel class');
        return $this;
    }
}
