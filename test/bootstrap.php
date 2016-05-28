<?php
/* mock COREPOS API classes for testing */

if (!class_exists('Plugin', false)) {
    class Plugin {}
}

if (!class_exists('CoreLocal', false)) {
    class CoreLocal
    {
        private static $data = array();
        public static function get($k)
        {
            return isset(self::$data[$k]) ? self::$data[$k] : '';
        }

        public static function set($k, $v)
        {
            self::$data[$k] = $v;
        }
    }
}

if (!class_exists('ReceiptOff', false)) {
    include(__DIR__ . '/../ReceiptOff.php');
}


