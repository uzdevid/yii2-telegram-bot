<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatPhoto
 *
 * @link https://core.telegram.org/bots/api#chatphoto
 *
 * This object represents a chat photo.
 */
class ChatPhoto extends Type {
    public string $smallFileId;
    public string $smallFileUniqueId;
    public string $bigFileId;
    public string $bigFileUniqueId;
}