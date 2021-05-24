<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;

class SellerApi implements \DevGabriel\Individual\Api\SellerApiInterface
{
    public function createSeller()
    {
        return 'create seller';
    }

    public function getSeller()
    {
        return 'get seller';

    }

    public function updateSeller()
    {
        return 'update seller';

    }

    public function deleteSeller()
    {
        return 'delete seller';
    }
}

