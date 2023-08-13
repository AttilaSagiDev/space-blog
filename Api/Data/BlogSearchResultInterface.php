<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface BlogSearchResultInterface extends SearchResultsInterface
{
    /**
     * Get blog items
     *
     * @return BlogInterface[]
     */
    public function getItems(): array;

    /**
     * Set blog items
     *
     * @param BlogInterface[] $items
     * @return BlogSearchResultInterface
     */
    public function setItems(array $items): BlogSearchResultInterface;
}
