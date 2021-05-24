<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;

class CreateManagement implements \DevGabriel\Individual\Api\CreateManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function putCreate($param)
    {
        return 'hello api PUT return the $param ' . $param;
    }
}

