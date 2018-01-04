<?php 
$gate_installed=array(
	'initialVersion'=>'0.0.1 GC',
	'initialServer'=>'https://api.gatewify.com/',
	'UpdateParams'=>array(
		'url'=>'GateControl/ControlCenter',
		'POST'=>array(
			'Version'=>'',
			'CheckLatest'=>true,
			'UpdateIfAvaliable'=>true,
			'InstallID'=>'',
			'Action'=>'Update',
			'TorkenCoded'=>''
		),
	),
	'LicencesParams'=>array(
		'url'=>'GateControl/ControlCenter',
		'POST'=>array(
			'Version'=>'',
			'CheckAccountUpdates'=>true,
			'GetLatestLicences'=>true,
			'InstallID'=>'',
			'Action'=>'Update',
			'TorkenCoded'=>''
		),
	)
);
define('GateCP',json_encode($gate_installed,true),true);
define('BasePath',realpath(dirname(__file__)).'/',true);
define('SystemPath',BasePath.'system/',true);
define('AppPath',BasePath.'system/',true);

require_once(SystemPath.'Core/GSystemCore.php');

