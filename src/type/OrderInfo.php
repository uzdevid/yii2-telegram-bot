<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type OrderInfo
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * This object represents information about an order.
 */
class OrderInfo extends Type {

    public string $name;
    public string $phoneNumber;
    public string $email;
    public ShippingAddress $shippingAddress;
}