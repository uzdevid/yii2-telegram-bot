<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\message\messages\keyboard\Keyboard;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class ReplyKeyboardMarkup extends Keyboard implements ReplyMarkupInterface {
    protected string $name = 'keyboard';

    /**
     * @param bool $isPersistent
     *
     * @return bool
     */
    public function isPersistent(bool $isPersistent): bool {
        $this->addAttribute('is_persistent', $isPersistent);
        return $this;
    }

    /**
     * @param bool $resizeKeyboard
     *
     * @return $this
     */
    public function resizeKeyboard(bool $resizeKeyboard = true): self {
        $this->addAttribute('resize_keyboard', $resizeKeyboard);
        return $this;
    }

    /**
     * @param bool $oneTimeKeyboard
     *
     * @return $this
     */
    public function oneTimeKeyboard(bool $oneTimeKeyboard): self {
        $this->addAttribute('one_time_keyboard', $oneTimeKeyboard);
        return $this;
    }

    /**
     * @param string $inputFieldPlaceholder
     *
     * @return $this
     */
    public function inputFieldPlaceholder(string $inputFieldPlaceholder): self {
        $this->addAttribute('input_field_placeholder', $inputFieldPlaceholder);
        return $this;
    }

    /**
     * @param bool $selective
     *
     * @return $this
     */
    public function setSelective(bool $selective): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }
}