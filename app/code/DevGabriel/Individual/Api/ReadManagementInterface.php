<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Api;

interface ReadManagementInterface
{

    /**
     * GET for Read api
     * @param string $param
     * @return string
     */
    public function getRead($param);
}

