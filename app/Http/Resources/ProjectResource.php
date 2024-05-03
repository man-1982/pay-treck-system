<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //Member names SHOULD be camel-cased (i.e., wordWordWord), with the first letter of each word capitalized.
        //@see https://jsonapi.org/recommendations/
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'description'  => $this->description,
            'createdAt'    => Carbon::parse($this->created_at)->format('d-m-Y'),
            'updatedAt'    => Carbon::parse($this->updated_at)->format('d-m-Y'),
            'dueDate'       => Carbon::parse($this->due_date)->format('d-m-Y'),
            'status'       => $this->status,
            'imagePath'    => $this->image_path,

// TIPS: In Laravel, when you access a property on a model,
// Laravel first checks if a method with the same name exists on the model.
// If it does, Laravel calls that method and returns its result. This is how Laravel's relationship methods work.
            'createdBy'    => new UserResource($this->createdBy),
            'updatedBy'    => new UserResource($this->updatedBy),
            ];
    }
}
