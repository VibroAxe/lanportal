<?php namespace Zeropingheroes\Lanager\Domain\Achievements;

use Zeropingheroes\Lanager\Domain\FlatResourceService;

class AchievementService extends FlatResourceService {

	/**
	 * The canonical application-wide name for the resource that this service provides for
	 * @var string
	 */
	protected $resource = 'achievements';

	/**
	 * Instantiate the service with a listener that the service can call methods
	 * on after action success/failure
	 * @param object ResourceServiceListenerContract $listener Listener class with required methods
	 */
	public function __construct( $listener )
	{
		parent::__construct($listener, new Achievement);
	}

}