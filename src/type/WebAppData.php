<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type WebAppData
 *
 * @link https://core.telegram.org/bots/api#webappdata
 *
 * Describes data sent from a Web App to the bot.
 */
class WebAppData extends Type {
    public string $data;
    public string $buttonText;
}