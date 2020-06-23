<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{

    public function accessUserCreationForm()
    {
        $response = $this->get(route('users.create'));

        $response->assertStatus(200);
        $response->assertViewIs('users.create');
    }

    public function accessUserEditionForm()
    {
        $response = $this->get(route('users.edit'));

        $response->assertStatus(200);
        $response->assertViewIs('users.edit');
    }

    public function testCreateUserWithNoAvatar()
    {
        $user = factory(User::class)->make();

        $response = $this->post(route('users.create'), [
            'email' => $user->email,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'password' => $user->password
        ]);


    }

    public function testStoreUser()
    {


    }

    public function testUpdateUser()
    {

    }

    public function testDeleteUser()
    {

    }


}
