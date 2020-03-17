<?php declare(strict_types=1);

namespace Surda\Ldap;

use Surda\Ldap\Exception\BindException;
use Surda\Ldap\Exception\InvalidCredentialsException;

interface ConnectionInterface
{
    /**
     * @param string $username
     * @param string $password
     * @param bool   $bindAsUser
     * @return bool
     * @throws BindException
     * @throws InvalidCredentialsException
     */
    public function attempt(string $username, string $password, bool $bindAsUser = FALSE): bool;

    /**
     * @param string|null $dn
     * @param string|null $password
     * @throws BindException
     */
    public function bind(?string $dn = NULL, ?string $password = NULL): void;

    /**
     * @return bool
     */
    public function isBound(): bool;
}