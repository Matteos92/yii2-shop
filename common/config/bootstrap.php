<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('frontendWebroot', 'http://yii2.local/');
Yii::setAlias('backendWebroot', 'http://admin.yii2.local/');