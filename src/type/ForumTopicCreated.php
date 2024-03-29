<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ForumTopicCreated
 *
 * @link https://core.telegram.org/bots/api#forumtopiccreated
 *
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated extends Type {

    public string $name;
    public int $iconColor;
    public string $iconCustomEmojiId;
}