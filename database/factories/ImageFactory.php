<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'url' => 'posts/'. $this->faker->image('public/storage/posts', 640, 480, null, false)
        ];

        //1er parametro -> ancho
        //2do parametro -> alto
        //3er parametro -> categoria -> null
        //4to parametro -> false -> concatenar principio
    }
}
