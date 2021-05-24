<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;

class UpdateManagement implements \DevGabriel\Individual\Api\UpdateManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postUpdate($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

