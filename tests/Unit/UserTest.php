<?php

namespace Tests\Unit;

use Tests\TestCase;
use app\Models\User;

class UserTest extends TestCase
{

    public function test_login_from()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_user_duplication()
    {
        $user = User::make([
            'name'=>'John',
            'email' => 'johno@gmail.com'

        ]);
        $user2 = User::make([
            'name'=>'darry',
            'email' => 'darry@gmail.com'

        ]);
    }
}
