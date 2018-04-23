<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'ZaloClient.php';
require 'ZaloConfig.php';

/** config your app id here */
const ZALO_APP_ID_CFG = "1131677296116040198";

/** config your app secret key here */
const ZALO_APP_SECRET_KEY_CFG = "rbZ5wQ2tVUh7Y3y6Kxqe";

/** config your offical account id here */
const ZALO_OA_ID_CFG = "3186267020034142764";

/** config your offical account secret key here */
const ZALO_OA_SECRET_KEY_CFG = "XkcN6J3G6QB0BTPRhYJK";


$zaloClient = new ZaloClient(new ZaloConfig(
    ZALO_APP_ID_CFG, 
    ZALO_APP_SECRET_KEY_CFG,
    ZALO_OA_ID_CFG,
    ZALO_OA_SECRET_KEY_CFG));

$zaloClient->sendMessageToAll("ABC");