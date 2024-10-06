<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\Gender;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Users';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Ism', 'name'),
                Text::make('Email', 'email'),
                Text::make('Parol', 'password'),
                Text::make('Foydalanuvchi nomi', 'username'),
                Text::make('Lavozim', 'position'),
                Text::make('Telefon raqam', 'phone'),
                Enum::make("Jins", "gender")->attach(Gender::class)->sortable(),
            ]),
        ];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
