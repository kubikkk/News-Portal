<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\HomePage;

use App\Collection\PostCollection;

interface HomePageServiceInterface
{
    public function getPosts(): PostCollection;
}
