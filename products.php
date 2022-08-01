<?php
/**
 * Plugin Name: Products
 * Plugin URI: https://elnayef.com
 * Description: This is a sample plugin developed for educational purposes.
 * Version: 1.0.0
 * Author: Mohammad Elnayef
 * Author URI: https://www.linkedin.com/in/mohammad-elnayef/
 */

/**
 * Products bootstrap file.
 */

use Educational\Plugins\Utility;
use Educational\Plugins\Product;
require_once dirname(__FILE__).'/classes/Utility.php';
require_once dirname(__FILE__).'/classes/Product.php';

Utility::hasRightsToAccessFile();
$product = new Product();
$product->register();
