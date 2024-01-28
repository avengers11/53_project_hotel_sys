<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::insert([
            [
                'title' => 'VIP-1',
                'facility' => array(),
                'assign_room' => array(),
                'img' => array(),
            ],
            [
                'title' => 'VIP-2',
                'facility' => array(),
                'assign_room' => array(),
                'img' => array(),
            ]
        ]);
    }
}
