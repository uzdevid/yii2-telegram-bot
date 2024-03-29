<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ShippingAddress
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 * This object represents information about an order.
 */
class ShippingAddress extends Type {

    public string $countryCode;
    public string $state;
    public string $city;
    public string $streetLine1;
    public string $streetLine2;
    public string $postCode;
}