<?php

use gjsbrt\NetBox\NetBox;

if (!function_exists('netbox')) {
    function netbox()
    {
        return app(NetBox::class);
    }
}
