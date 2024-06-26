<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type LoginUrl
 *
 * @link https://core.telegram.org/bots/api#loginurl
 *
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user.
 * Serves as a great replacement for the Telegram Login Widget when the user is coming from Telegram.
 * All the user needs to do is tap/click a button and confirm that they want to log in:
 */
class LoginUrl extends Type {

    public string $url;
    public string $forwardText;
    public string $botUsername;
    public bool $requestWriteAccess;
}