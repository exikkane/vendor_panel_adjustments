<?php

if ($mode == 'login') {
    if ($auth['user_id'] && $auth['user_type'] == 'V') {
        return [CONTROLLER_STATUS_REDIRECT, 'products.manage'];
    }
}