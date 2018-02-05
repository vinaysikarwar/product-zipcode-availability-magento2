<?php

namespace WTC\ZipcodeAvailablity\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Mageplaza\HelloWorld\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		echo $this->helperData->getGeneralConfig('enable');
		echo $this->helperData->getGeneralConfig('block_title');
		echo $this->helperData->getGeneralConfig('success_message');
		echo $this->helperData->getGeneralConfig('failure_message');
		echo $this->helperData->getGeneralConfig('empty_message');
		echo $this->helperData->getGeneralConfig('success_message');
		exit();

	}
}
