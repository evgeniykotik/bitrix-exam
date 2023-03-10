<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#^/testsite/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/testsite/personal/order/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#^/testsite/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/testsite/personal/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/testsite/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/testsite/catalog/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/testsite/groups/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_group',
    'PATH' => '/testsite/groups/group.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/testsite/people/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_user',
    'PATH' => '/testsite/people/user.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/testsite/photo/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery_user',
    'PATH' => '/testsite/photo/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/testsite/about/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/testsite/about.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/testsite/forum/#',
    'RULE' => '',
    'ID' => 'bitrix:forum',
    'PATH' => '/testsite/forum/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/testsite/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/testsite/store/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/testsite/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/testsite/news/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#^#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/testsite/news.php',
    'SORT' => 100,
  ),
);
