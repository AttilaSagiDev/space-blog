<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Model\ResourceModel\Blog;

use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Space\Blog\Model\Blog;
use Space\Blog\Model\ResourceModel\Blog as BlogResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'blog_id';

    /**
     * @var string
     */
    protected $_eventPrefix = 'space_blog_collection';

    /**
     * @var string
     */
    protected $_eventObject = 'blog_collection';

    /**
     * Constructor
     *
     * @param EntityFactoryInterface $entityFactory
     * @param LoggerInterface $logger
     * @param FetchStrategyInterface $fetchStrategy
     * @param ManagerInterface $eventManager
     * @param AdapterInterface|null $connection
     * @param AbstractDb|null $resource
     */
    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
    }

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(Blog::class, BlogResourceModel::class);
    }
}
