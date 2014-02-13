<?php

namespace Xsolla\SDK\Storage;

use Xsolla\SDK\Exception\UnprocessableRequestException;
use Xsolla\SDK\User;

interface PaymentsStandardInterface extends PaymentsInterface
{
    /**
     * @throws UnprocessableRequestException
     */
    public function pay($invoiceId, $amountVirtual, User $user, $dryRun);
}
