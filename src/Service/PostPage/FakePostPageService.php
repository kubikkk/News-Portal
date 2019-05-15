<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\PostPage;

use App\Model\PostCategory;
use App\Model\PostPage;

use Faker\Factory;

/**
 * Class FakePostPageService Create Fake post page
 */
class FakePostPageService implements PostPageServiceInterface
{
    public function getPostPage(int $id):PostPage
    {
        $faker=Factory::create();
        $category= new PostCategory($faker->word);
        $post= new PostPage(
            $id,
            $faker->sentence,
            $category
        );
        $post
            ->setDescription($faker->text())
            ->setPublicationDate($faker->dateTime)
            ->setTitle($faker->sentence);


        return $post;
    }
}
