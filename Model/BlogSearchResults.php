<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Model;

use Space\Blog\Api\Data\BlogSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

class BlogSearchResults extends SearchResults implements BlogSearchResultsInterface
{
}
