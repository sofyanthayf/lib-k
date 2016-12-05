<?php

$config['useragent'] = 'KI-Lab Mailer';
$config['protocol'] = 'smtp';

$config['smtp_host'] = 'mail.k-innovation.org';
$config['smtp_port'] = 587; 

$config['smtp_user'] = 'lib-k@k-innovation.org';
$config['smtp_pass'] = 'Librari@n';
$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;