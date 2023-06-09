<?php

namespace uzdevid\telegram\bot\message;

use uzdevid\telegram\bot\BaseBot;
use uzdevid\telegram\bot\message\messages\MessageInterface;

/**
 * Class Message
 * @package uzdevid\telegram\bot
 *
 * @property int $chatId
 * @property MessageInterface $message
 */
class Message extends BaseBot {
    private MessageInterface|null $_message = null;

    /**
     * @return MessageInterface
     */
    protected function getMessage(): MessageInterface {
        return $this->_message;
    }

    /**
     * @param MessageInterface $source
     */
    public function setMessage(MessageInterface $message): void {
        $this->_message = $message;
    }

    /**
     * @param MessageInterface $source
     */
    public function message(MessageInterface $message): static {
        $this->_message = $message;
        return $this;
    }
}