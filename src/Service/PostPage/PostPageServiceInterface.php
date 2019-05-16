<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\PostPage;

use App\Model\Post;

/**
 * Interface for get post data by id
 *
 * @author Anton Kubrak <ljuustpewpewl@gmail.com
 */
interface PostPageServiceInterface
{
    public function getPostPage(int $id): Post;
}
