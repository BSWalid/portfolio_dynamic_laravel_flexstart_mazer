<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [




            'title' => $this->faker->name(),
            'user_id'=>'1',
            'small_description' => $this->faker->realText(100,2),
            'long_description' => $this->faker->realText(300,2),
            'github_link' => $this->faker->url(),
            'page_link' => $this->faker->url(), // password
            'project_image_url' => $this->faker->url(),
            'type'=> 'Mobile app',
            'contribution'=> 'created',



        ];
    }
}
