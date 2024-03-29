<?php

/**
 *
 * This file is part of Phpfastcache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt and LICENCE files.
 *
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 * @author Contributors  https://github.com/PHPSocialNetwork/phpfastcache/graphs/contributors
 */

declare(strict_types=1);

namespace Phpfastcache\Drivers\Couchbasev3;

use Phpfastcache\Config\ConfigurationOption;
use Phpfastcache\Exceptions\PhpfastcacheLogicException;

class Config extends ConfigurationOption
{
    protected const DEFAULT_VALUE = '_default';
    protected string $host = '127.0.0.1';
    protected int $port = 8091;
// SSL: 18091

    protected string $username = '';
    protected string $password = '';
    protected string $bucketName = self::DEFAULT_VALUE;
    protected string $scopeName = self::DEFAULT_VALUE;
    protected string $collectionName = self::DEFAULT_VALUE;


    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setHost(string $host): Config
    {
        return $this->setProperty('host', $host);
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setPort(int $port): Config
    {
        return $this->setProperty('port', $port);
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setUsername(string $username): Config
    {
        return $this->setProperty('username', $username);
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setPassword(string $password): Config
    {
        return $this->setProperty('password', $password);
    }

    /**
     * @return string
     */
    public function getBucketName(): string
    {
        return $this->bucketName;
    }

    /**
     * @param string $bucketName
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setBucketName(string $bucketName): Config
    {
        return $this->setProperty('bucketName', $bucketName);
    }
    /**
     * @return string
     */
    public function getScopeName(): string
    {
        return $this->scopeName;
    }

    /**
     * @param string $scopeName
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setScopeName(string $scopeName): Config
    {
        return $this->setProperty('scopeName', $scopeName);
    }

    /**
     * @return string
     */
    public function getCollectionName(): string
    {
        return $this->collectionName;
    }

    /**
     * @param string $collectionName
     * @return Config
     * @throws PhpfastcacheLogicException
     */
    public function setCollectionName(string $collectionName): Config
    {
        return $this->setProperty('collectionName', $collectionName);
    }
}
