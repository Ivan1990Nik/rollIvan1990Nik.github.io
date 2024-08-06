<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //
		
/* 
require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
 const HOST = 'smtp.mail.ru';
 const LOGIN = 'pelevin.vanyusha90@mail.ru';
 const PASS = 'fc3SDMSTYx0kfHqsm0NV';
 const PORT = '465'; */

		// *** /SMTP *** //
   
    const SENDER = 'pelevin.vanyusha90@mail.ru';
    const CATCHER = 'pelevin.vanyusha90@mail.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    

