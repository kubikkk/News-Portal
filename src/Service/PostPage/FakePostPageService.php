<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\PostPage;

use App\Model\Category;
use App\Model\Post;



use Faker\Factory;

/**
 * Class FakePostPageService Create Fake data on post page
 *
 * @author Anton Kubrak <ljustpewpewl@gmail.com>
 */
class FakePostPageService implements PostPageServiceInterface
{
    public function getPostPage(int $id): Post
    {
        $faker=Factory::create();
        $category= new Category($faker->word);
        $post= new Post(
            $id,
            $category,
            $faker->sentence
        );
        $post
            ->setDescription($faker->text())
            ->setPublicationDate($faker->dateTime)
            ->setTitle($faker->sentence);


        return $post;
    }
}
