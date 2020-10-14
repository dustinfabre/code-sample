<?php


/**
 * Function to delay the push
 * @param $user_id
 * @return bool
 */
public function isNeedToDelayPush($user_id)
{
    if (!DateTimeHelper::isNightTime()) return false;
    $not_get_nighttime = TeHelper::getUsermeta($user_id, 'not_get_nighttime');
    if ($not_get_nighttime == 'yes') return true;
    return false;
}

/**
 * Function to check if need to send the push
 * @param $user_id
 * @return bool
 */
public function isNeedToSendPush($user_id)
{
    $not_get_notification = TeHelper::getUsermeta($user_id, 'not_get_notification');
    if ($not_get_notification == 'yes') return false;
    return true;
}