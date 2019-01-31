<?php
$arComponentParameters = array(
   "GROUPS" => array(
      "SETTINGS" => array(
         "NAME" => "Настройки",
      ),
   ),
   "PARAMETERS" => array(
      "IBLOCK_ID" => array(
         "PARENT" => "SETTINGS",
         "NAME" => "ID инфоблока",
         "TYPE" => "STRING",
      ),
      "ELEMENT_ID" => array(
         "PARENT" => "SETTINGS",
         "NAME" => "ID элемента",
         "TYPE" => "STRING",
      ),
      "DEVELOPMENT" => array(
         "PARENT" => "SETTINGS",
         "NAME" => "Кейсы разработки",
         "TYPE" => "CHECKBOX",
         "DEFAULT" => "N",
      ),
   )
);