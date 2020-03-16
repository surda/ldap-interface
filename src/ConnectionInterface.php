<?php declare(strict_types=1);

namespace Surda\Ldap;

use Surda\Ldap\Exception\BindException;
use Surda\Ldap\Exception\InvalidCredentialsException;

interface ConnectionInterface
{
    /**
     * @param string|null $dn
     * @param string|null $password
     * @throws BindException
     * @throws InvalidCredentialsException
     */
    public function bind(?string $dn = NULL, ?string $password = NULL): void;

    /**
     * @return bool
     */
    public function isBound(): bool;
}