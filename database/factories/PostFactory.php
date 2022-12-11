<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => 1,
            "category_id" => mt_rand(1,3),
            "title" => $this->faker->word(7),
            "slug" => $this->faker->unique()->sentence(),
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam numquam aliquam cupiditate quo perspiciatis odio omnis, facilis ut maiores. Voluptates placeat aperiam omnis cum optio temporibus sed perferendis dolore dolor, quibusdam quaerat aliquam, aliquid tempore similique! Expedita id dicta, ducimus dolore eveniet nobis recusandae et cumque. Vero pariatur praesentium consequatur natus dolore temporibus cumque dolor quidem at repudiandae architecto ullam adipisci, tempore nobis dignissimos reprehenderit quo aspernatur. Optio cumque eveniet, aperiam illum sint earum cum recusandae placeat quas nemo quam corporis nulla atque ipsa voluptatibus praesentium rem nihil voluptates tempore ut. Est, adipisci? Mollitia neque error nemo numquam delectus quisquam voluptatum consequatur optio, itaque dolorem necessitatibus laudantium quam, nostrum accusantium? Ducimus tenetur molestias architecto nobis qui dolorem, illo explicabo molestiae ab quaerat ex impedit officia reprehenderit, nulla ullam aliquid beatae incidunt animi eum magnam maiores porro nostrum eveniet. Quis, sapiente ullam ad earum laborum architecto exercitationem voluptates perferendis necessitatibus deleniti assumenda quasi esse pariatur similique? Eveniet, quia deserunt omnis commodi quam minus possimus, illo obcaecati distinctio voluptates culpa temporibus hic aperiam. Repellendus a nobis recusandae assumenda perferendis? Maxime veritatis odio laborum? Commodi dolores possimus dolorum beatae itaque corrupti, accusamus quis, voluptatibus nisi praesentium debitis at exercitationem, nobis consequuntur esse nostrum?",
        ];
    }
}
