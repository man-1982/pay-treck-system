<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // TODO add verification for user roles and base on this roles return different data
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'email'             => $this->email,
            'emailVerifiedAt'   => $this->email_verified_at,
            'createdAt'         => Carbon::parse($this->created_at)->format('d-m-Y'),
            'updatedAt'         => Carbon::parse($this->updated_at)->format('d-m-Y'),
        ];
    }
}
