<?php
namespace Educational\Plugins;

class Utility{

    public static function hasRightsToAccessFile(): void {
        if ( ! defined( 'ABSPATH' ) ) {
            exit;
        }
    }

}