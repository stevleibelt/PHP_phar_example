<?php
/**
 * Main file to start this project as phar archive
 * 
 * @author stevleibelt
 * @since 2012-10-28
 */
require 'phar://example.phar/application/application.php';

application\Application::create()->run();