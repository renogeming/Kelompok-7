<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'judulPost' => $this->judulPost,
            'postingan' => $this->postingan,
            'pembuat_post' => $this->pembuatPost->name,
            'dibuat' => Carbon::parse($this->created_at)->format('d F Y \p\u\k\u\l H:i'),
            'komen' => KomenResource::collection($this->komen),
        ];
    }
}
