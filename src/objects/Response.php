<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\Object;

/**
 * Class Response
 *
 * @package uzdevid\telegram\bot\objects
 *
 * @property bool $ok
 * @property int $messageId
 * @property User $from
 * @property Chat $chat
 * @property int $date
 * @property string $text
 */
class Response extends Object {
    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
        ];
    }
}