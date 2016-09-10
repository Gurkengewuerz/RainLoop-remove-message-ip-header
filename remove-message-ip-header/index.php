<?php

class RemoveMessageIPHeaderPlugin extends \RainLoop\Plugins\AbstractPlugin
{
	public function Init()
	{
		$this->addHook('filter.build-message', 'FilterBuildMessage');
	}

	/**
	 * @param \MailSo\Mime\Message $oMessage
	 */
	public function FilterBuildMessage(&$oMessage)
	{
		if ($oMessage instanceof \MailSo\Mime\Message)
		{
			$msgID = $oMessage->MessageId();
			$serverIP = $this->Manager()->Actions()->Http()->GetHost(true, true, true);
			$changeTo = $this->Config()->Get('plugin', 'ipadress', 'server.local');
			
			$newBody = str_replace($serverIP, $changeTo, $msgID);
			
			$oMessage->SetMessageId($newBody);
			$_SERVER['SERVER_NAME'] = $changeTo;
		}
	}
	
	/**
	 * @return array
	 */
	public function configMapping()
	{
		return array(
			\RainLoop\Plugins\Property::NewInstance('server_name')
				->SetLabel('ServerName')
				->SetType(\RainLoop\Enumerations\PluginPropertyType::STRING)
				->SetDescription('Currently set: ' . $_SERVER['SERVER_NAME'])
				->SetDefaultValue('server.local')
		);
	}
}