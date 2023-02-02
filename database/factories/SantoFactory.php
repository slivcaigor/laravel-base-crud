<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class SantoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake() -> firstName(),
            'luogoNascita' => fake() -> city(),
            'dataBenedizione' => fake() -> dateTimeAD(),
            'numeroMiracoli' => fake() -> numberBetween(1, 99),
        ];
    }
}