<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'zip_code' => $this->resource->zip_code,
            'locality' => $this->resource->locality,
            'federal_entity' => $this->resource->federal_entity,
            'settlements' => $this->resource->settlements,
            'municipality' => $this->resource->municipality,
            'time' => microtime(true) - LARAVEL_START
        ];
    }
}
