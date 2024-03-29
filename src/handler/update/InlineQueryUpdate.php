<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\property\loader\Entity;
use uzdevid\telegram\bot\type\InlineQuery;


/**
 * Class InlineQueryUpdate
 */
class InlineQueryUpdate extends Entity implements UpdateInterface {
    public int $updateId;
    public InlineQuery $inlineQuery;

    /**
     * @return string
     */
    public static function objectName(): string {
        return 'inlineQuery';
    }

    /**
     * @return InlineQuery
     */
    public function body(): InlineQuery {
        return $this->inlineQuery;
    }

    /**
     * @return array[]
     */
    protected function properties(): array {
        return [
            'inlineQuery' => [InlineQuery::class, 'inlineQuery']
        ];
    }
}