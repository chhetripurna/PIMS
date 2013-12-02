<?php

class WebUser extends CWebUser{

public function checkAccess($operation, $params=array())
{
	if (empty($this->id)){
		return false;
	}
	$role = $this->getState("roles");
	if ($role === 'admin') {
		return true;
	}

	return ($operation === $role);
}

}

?>
