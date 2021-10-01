<?php

namespace App\Transformers;

use App\Models\Movies;

class MoviesToDto
{
    public static function provideTransformer(Movies $movie)
    {
        switch ($movie->type) {
            case 'Comedy':
                return ['id' => $movie->id, 'name' => $movie->name, 'type' => 'Comedy / Drama',];
            case 'Mystery/Crime':
                return ['id' => $movie->id, 'name' => $movie->name, 'type' => 'Mystery / Crime',];
            default:
                return ['id' => $movie->id, 'name' => $movie->name, 'type' => $movie->type,];
        }
    }
}
