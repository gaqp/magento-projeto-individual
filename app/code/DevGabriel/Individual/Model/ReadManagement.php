<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;

class ReadManagement implements \DevGabriel\Individual\Api\ReadManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getRead($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

