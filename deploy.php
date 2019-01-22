<?php

/*
Plugin Name: wp-deploy-flow
Plugin URI: https://github.com/sean-e-dietrich/wp-deploy-flow
Description: A command-line task to deploy
Version: 0.1
Author: Sean Dietrich
Author URI: https://github.com/sean-e-dietrich
License: GPL2
dependencies: wp-migrate-db
*/

if (defined('WP_CLI') && WP_CLI) {
	include 'lib/command.php';
}
