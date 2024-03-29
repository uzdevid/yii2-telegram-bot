<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\property\loader\Entity;
use uzdevid\telegram\bot\type\Message;

/**
 * Class MessageUpdate
 */
class MessageUpdate extends Entity implements UpdateInterface {
    public int $updateId;
    public Message $message;

    /**
     * @return string
     */
    public static function objectName(): string {
        return 'message';
    }

    /**
     * @return Message
     */
    public function body(): Message {
        return $this->message;
    }

    /**
     * @return array[]
     */
    protected function properties(): array {
        return [
            'message' => [Message::class, 'message']
        ];
    }
}