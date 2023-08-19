<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\EntityManager\EntityManager;
use Magento\Framework\EntityManager\MetadataPool;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Space\Blog\Api\Data\BlogInterface;
use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractDb
{
    /**
     * @var EntityManager
     */
    protected EntityManager $entityManager;

    /**
     * @var MetadataPool
     */
    protected MetadataPool $metadataPool;

    /**
     * Constructor
     *
     * @param Context $context
     * @param EntityManager $entityManager
     * @param MetadataPool $metadataPool
     * @param string|null $connectionName
     */
    public function __construct(
        Context $context,
        EntityManager $entityManager,
        MetadataPool $metadataPool,
        string $connectionName = null
    ) {
        $this->entityManager = $entityManager;
        $this->metadataPool = $metadataPool;
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

    /**
     * Save an object.
     *
     * @param AbstractModel $object
     * @return $this
     * @throws \Exception
     */
    public function save(AbstractModel $object): static
    {
        $this->entityManager->save($object);
        return $this;
    }

    /**
     * Delete the object
     *
     * @param AbstractModel $object
     * @return AbstractDb|Blog|$this
     * @throws \Exception
     */
    public function delete(AbstractModel $object): AbstractDb|Blog|static
    {
        $this->entityManager->delete($object);
        return $this;
    }
}
