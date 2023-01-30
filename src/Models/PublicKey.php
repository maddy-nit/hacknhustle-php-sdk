<?php

declare(strict_types=1);

/*
 * HackNHustleIONDIDLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HackNHustleIONDIDLib\Models;

use stdClass;

class PublicKey implements \JsonSerializable
{
    /**
     * @var string
     */
    private $kty;

    /**
     * @var string
     */
    private $crv;

    /**
     * @var string
     */
    private $x;

    /**
     * @var string
     */
    private $y;

    /**
     * @param string $kty
     * @param string $crv
     * @param string $x
     * @param string $y
     */
    public function __construct(string $kty, string $crv, string $x, string $y)
    {
        $this->kty = $kty;
        $this->crv = $crv;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Returns Kty.
     */
    public function getKty(): string
    {
        return $this->kty;
    }

    /**
     * Sets Kty.
     *
     * @required
     * @maps kty
     */
    public function setKty(string $kty): void
    {
        $this->kty = $kty;
    }

    /**
     * Returns Crv.
     */
    public function getCrv(): string
    {
        return $this->crv;
    }

    /**
     * Sets Crv.
     *
     * @required
     * @maps crv
     */
    public function setCrv(string $crv): void
    {
        $this->crv = $crv;
    }

    /**
     * Returns X.
     */
    public function getX(): string
    {
        return $this->x;
    }

    /**
     * Sets X.
     *
     * @required
     * @maps x
     */
    public function setX(string $x): void
    {
        $this->x = $x;
    }

    /**
     * Returns Y.
     */
    public function getY(): string
    {
        return $this->y;
    }

    /**
     * Sets Y.
     *
     * @required
     * @maps y
     */
    public function setY(string $y): void
    {
        $this->y = $y;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['kty'] = $this->kty;
        $json['crv'] = $this->crv;
        $json['x']   = $this->x;
        $json['y']   = $this->y;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
