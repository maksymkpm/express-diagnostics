<?php
use api\v1_0\controller\Member\MemberController;

use \rest\router;
use \rest\request;

router::addController('', MemberController::class);

router::controller(MemberController::class)
	->addAction(request::HTTP_GET, 'member', 'Get');
	
router::controller(MemberController::class)
	->addAction(request::HTTP_POST, 'member', 'Create');
