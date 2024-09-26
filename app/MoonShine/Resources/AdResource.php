<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\Gender;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Ad>
 */
class AdResource extends ModelResource
{
    protected string $model = Ad::class;

    protected string $title = "E'lonlar";

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make("Sarlavha", "title"),
                Text::make("Ta'rif", "description")->hideOnIndex(),
                Number::make("Narxi", "price")->sortable(),
                Number::make("Xonalar", "rooms")->sortable(),
                Text::make("Manzil", "address")->hideOnIndex(),
                Enum::make("Jins", "gender")->attach(Gender::class)->sortable(),
                BelongsTo::make(label: 'Filial', relationName: 'branch', resource: new BranchResource())->sortable(),
                BelongsTo::make(label: 'Status', relationName: 'status', resource: new StatusResource())->sortable(),

            ]),
        ];
    }

    /**
     * @param Ad $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
