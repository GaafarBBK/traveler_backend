<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'country_id' => $this->country_id,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),

            // Relationships
            'country' => new CountryResource($this->whenLoaded('country')),
            'areas' => AreaResource::collection($this->whenLoaded('areas')),
            'trips' => TripResource::collection($this->whenLoaded('trips')),
        ];
    }
}
