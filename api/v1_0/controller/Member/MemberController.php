<?php
namespace api\v1_0\controller\Member;

use \RequestParameters\MemberGet;
use \RequestParameters\MemberCreate;
use \RequestParameters\MemberEdit;

use RuntimeException;

class MemberController extends MemberBaseController {
	protected $noTokenAction = [
		'Get',
	];

	protected function actionGet() {
		$get = $this->request->dataGet();
		$params = new MemberGet($get);

		$Member = \Member::Get((int) $params->Member_id);

		$result = [
			"Member Get response",
			$get,
			'Member_id' => $Member->data['Member_id'],
		];

		$this->response->set($result);
	}
	
	protected function actionCreate() {
		//$get = $this->request->dataGet();
		//$params = new MemberGet($get);

		//$Member = \Member::Get((int) $params->Member_id);

		$result = [
			"Member Create response"
		];

		$this->response->set($result);
	}
}
