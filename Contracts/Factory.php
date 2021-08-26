<?php

declare(strict_types=1);

namespace Modules\Amazon\Contracts;

use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;

interface Factory {
    public function api(): DefaultApi;

    /**
     * @return $this
     */
    public function config(DefaultApi $api);

    /**
     * @param DefaultApi|callable $api
     *
     * @return $this
     */
    public function apiUsing($api);

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    public function search(string $category, string $keyword = null, int $page = 1);

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    public function browse(string $node, string $sort = 'TopSellers');

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    public function item(string $asin);

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    public function items(array $asin);

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    public function variations(string $asin, int $page = 1);

    /**
     * ASIN (Default), SKU, UPC, EAN, and ISBN.
     *
     * @return Factory
     */
    public function setIdType(string $idType): self;

    public function getIdType(): string;
}
