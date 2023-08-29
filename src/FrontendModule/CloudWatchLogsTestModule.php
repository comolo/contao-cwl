<?php declare(strict_types=1);

namespace Comolo\AwscwlBundle\FrontendModule;

use Contao\Module;
use Contao\BackendTemplate;

class CloudWatchLogsTestModule extends Module
{
	/**
	 * Template.
	 *
	 * @var string
	 */
	protected $strTemplate = 'mod_not_existent';


	/**
	 * Display a wildcard in the back end.
	 *
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE === 'BE') {
			$template = new BackendTemplate('be_wildcard');

			$template->wildcard = '### CloudWatchLogs Test: Add PHP error to log ###';
			$template->title = $this->headline;
			$template->id = $this->id;
			$template->link = $this->name;
			$template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id='.$this->id;

			return $template->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the module.
	 */
	protected function compile()
	{
		$awscwltest = new NonExistentClass; // this should result in a PHP error you can see in the logs (Contao and CloudWatch)
	}


}
