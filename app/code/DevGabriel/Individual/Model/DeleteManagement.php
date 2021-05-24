<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;

class DeleteManagement implements \DevGabriel\Individual\Api\DeleteManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getDelete($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

