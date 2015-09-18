<?php
define ('IN_CORE_PATH', __DIR__);
define ('IN_CONFIG_PATH', IN_CORE_PATH.'/config');
define ('IN_COMPONENTS_PATH', IN_CORE_PATH.'/components');
define ('IN_CONTROLLERS_PATH', IN_CORE_PATH.'/controllers');
define ('IN_TEMPLATE_PATH', IN_CORE_PATH.'/template');

require_once IN_CONFIG_PATH.'/routes.php';
require_once IN_CONFIG_PATH.'/template.php';
require_once IN_COMPONENTS_PATH.'/main/InRouter.php';
require_once IN_COMPONENTS_PATH.'/main/InProject.php';
require_once IN_COMPONENTS_PATH.'/display/InTheme.php';

$project = new InProject();
?>