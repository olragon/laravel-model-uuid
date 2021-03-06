<?php

namespace Tests\Fixtures;

class MultipleUuidPost extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $casts = ['uuid' => 'uuid', 'custom_uuid' => 'uuid'];

    public function uuidColumns(): array
    {
        return ['uuid', 'custom_uuid'];
    }
}
