<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Groups;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Groups::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descricao' => $this->faker->text()
        ];
    }
}
