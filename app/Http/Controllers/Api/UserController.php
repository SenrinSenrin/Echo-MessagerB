<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\DatasSend;

class UserController extends Controller
{
    public function getUsers(){
        $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'age' => 28,
            'gender' => 'male',
            'avatar' => 'https://example.com/avatars/john.jpg',
            'bio' => 'Full-stack developer passionate about Laravel and Vue.js.',
            'location' => 'New York, USA',
            'is_active' => true,
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'age' => 25,
            'gender' => 'female',
            'avatar' => 'https://example.com/avatars/jane.jpg',
            'bio' => 'UI/UX designer who loves minimalism and clean interfaces.',
            'location' => 'London, UK',
            'is_active' => true,
        ],
        [
            'id' => 3,
            'name' => 'Alex Kim',
            'email' => 'alex@example.com',
            'age' => 30,
            'gender' => 'non-binary',
            'avatar' => 'https://example.com/avatars/alex.jpg',
            'bio' => 'Backend engineer specializing in APIs and microservices.',
            'location' => 'Seoul, South Korea',
            'is_active' => false,
        ],
    ];

        event(new DatasSend($users));
        return $users;
    }
    
}
