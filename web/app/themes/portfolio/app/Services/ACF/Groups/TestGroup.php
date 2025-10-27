<?php

namespace App\Services\ACF\Groups;

class TestGroup
{
    public function groupArray(): array
    {
        return [
            'key' => 'field_1',
            'label' => 'Sub Title',
            'name' => 'sub_title',
            'type' => 'text',
        ];
    }

}
