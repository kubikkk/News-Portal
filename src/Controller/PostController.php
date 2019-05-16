<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Service\PostPage\PostPageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller view post data on post page
 *
 * @author Anton Kubrak <ljustpewpewl@gmail.com>
 */
class PostController extends AbstractController
{
    public function view(PostPageServiceInterface $postPageService, int $id): Response
    {
        $post = $postPageService->getPostPage($id);

        return $this->render('post/view.html.twig', [
            'post' => $post, ]);
    }
}
