<?php
/**
 * Created by PhpStorm.
 * User: Seanwu
 * Date: 2016/5/18
 * Time: 15:25
 */
include_once("../library/LxSecretManager.class.php");
include_once("../library/model/User.php");
include_once("../library/model/Actor.php");
header('Content-type: application/json;charset=utf-8');

$sdk_manager = R::getLxSDKManager();
echo $sdk_manager->sync_get_token_with_contract(R::getUserA(), R::getTestContract(), R::getActor());

