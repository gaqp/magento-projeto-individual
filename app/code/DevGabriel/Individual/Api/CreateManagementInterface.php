<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Api;

interface CreateManagementInterface
{

    /**
     * PUT for Create api
     * @param string $param
     * @return string
     */
    public function putCreate($param);
}

