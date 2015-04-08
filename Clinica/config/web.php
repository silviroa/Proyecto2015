<?php

$params = require(__DIR__ . '/params.php');

$config = [
'id' => 'basic',
'basePath' => dirname(__DIR__),
'bootstrap' => ['log'],

'modules' => [
'historiaclinica' => [
            'class' => 'app\modules\historiaclinica\HistoriaclinicaModule',
        ],
'internaciones' => [
'class' => 'app\modules\internaciones\InternacionesModule',
],
'admturnos' => [
            'class' => 'app\modules\admturnos\admTurnosModule',
        ],
'personal' => [
'class' => 'app\modules\personal\PersonalModule',
],
'comedor' => [
'class' => 'app\modules\comedor\ComedorModule',
],
'farmacia' => [
'class' => 'app\modules\farmacia\FarmaciaModule',
],
'wiki' => [
'class' => 'app\modules\wiki\WikiModule',
],

'ObraSociales' => [
'class' => 'app\modules\obrasociales\ObrasocialesModule',
],
'Ambulancias' => [
'class' => 'app\modules\ambulancias\AmbulanciasModule',
],
],
'components' => [
'request' => [
// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
'cookieValidationKey' => 'Clave de cookie',
],
'cache' => [
'class' => 'yii\caching\FileCache',
],
'user' => [
'identityClass' => 'app\models\User',
'enableAutoLogin' => true,
],
'errorHandler' => [
'errorAction' => 'site/error',
],
'mailer' => [
'class' => 'yii\swiftmailer\Mailer',
// send all mails to a file by default. You have to set
// 'useFileTransport' to false and configure a transport
// for the mailer to send real emails.
'useFileTransport' => true,
],
'log' => [
'traceLevel' => YII_DEBUG ? 3 : 0,
'targets' => [
[
'class' => 'yii\log\FileTarget',
'levels' => ['error', 'warning'],
],
],
],
'db' => require(__DIR__ . '/db.php'),
],
'params' => $params,
];

if (YII_ENV_DEV) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = 'yii\debug\Module';

	$config['bootstrap'][] = 'gii';
	$config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
