<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\property\loader\Entity;
use uzdevid\telegram\bot\type\CallbackQuery;

/**
 * Class CallbackQueryUpdate
 */
class CallbackQueryUpdate extends Entity implements UpdateInterface {
    public int $updateId;
    public CallbackQuery $callbackQuery;

    /**
     * @return string
     */
    public static function objectName(): string {
        return 'callbackQuery';
    }

    /**
     * @return CallbackQuery
     */
    public function body(): CallbackQuery {
        return $this->callbackQuery;
    }

    /**
     * @return array[]
     */
    public function properties(): array {
        return [
            'callbackQuery' => [CallbackQuery::class, 'callbackQuery']
        ];
    }
}