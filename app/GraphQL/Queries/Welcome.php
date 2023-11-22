<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

final readonly class Welcome
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return 'Welcome, this is a sample GraphQL and Laravel CRUD app';
    }
}
