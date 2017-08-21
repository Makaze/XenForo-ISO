<?php

class ISO_Listener {
    const ADDON_NAMESPACE = 'ISO_';

    public static function load_class($class, array &$extend) {
        $extend[] = self::ADDON_NAMESPACE.$class;
    }
}