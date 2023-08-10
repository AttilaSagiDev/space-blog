<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Space\Blog\Api\Data\BlogInterface;

class Blog extends AbstractDb
{
    /**
     * Constructor
     *
     * @param Context $context
     * @param string $connectionName
     */
    public function __construct(
        Context $context,
        $connectionName = null
    ) {
        parent::__construct($context, $connectionName);
    }

    /**
     * Construct with init
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init('space_blog', BlogInterface::BLOG_ID);
    }
}
