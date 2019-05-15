<?php

declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\HomePage;

use App\Collection\PostCollection;
use App\Model\Category;
use App\Model\Post;
use Faker\Factory;

final class FakeHomePageService implements HomePageServiceInterface
{
    public function getPosts(): PostCollection
    {
        $collection = new PostCollection();

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post(
                $faker->randomNumber(),
                new Category($faker->sentence),
                $faker->sentence
            );
            $post
                ->setImage($faker->imageUrl())
                ->setShortDescription($faker->sentence())
                ->setPublicationDate($faker->dateTime)
            ;

            $collection->addPost($post);
        }

        return $collection;
    }
}
