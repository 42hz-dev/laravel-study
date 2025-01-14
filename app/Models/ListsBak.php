<?php

namespace App\Models;

class ListsBak
{
    public static function getAll() : array
    {
        return [
            [
                'id' => 1,
                'subject' => 'first content',
                'content' => 'here is first content'
            ],
            [
                'id' => 2,
                'subject' => 'second content',
                'content' => 'here is second content'
            ]
        ];
    }

    public static function getOne(int $id) : array
    {
        $lists = self::getAll();
        foreach ($lists as $list) {
            if ($list['id'] === $id) {
                return $list;
            }
        }

        return [];
    }
}
