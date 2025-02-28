<?php

defined('BOOTSTRAP') or die('Access denied');

fn_register_hooks(
    'set_notification_pre',
    'dispatch_before_display'
);