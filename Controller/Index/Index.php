<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * Index action
     *
     * @return ResponseInterface|ResultInterface
     */
    public function execute(): ResultInterface|ResponseInterface
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
