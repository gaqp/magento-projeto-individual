<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Api;

interface UpdateManagementInterface
{

    /**
     * POST for Update api
     * @param string $param
     * @return string
     */
    public function postUpdate($param);
}

