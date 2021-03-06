<?php

namespace Modules\Auth\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Modules\Auth\Repositories\RoleRepository;
use Modules\Auth\Repositories\UserRepository;
use Modules\Auth\Services\UserRegistration;

class UserRegistrationTest extends BaseUserTestCase
{
    /**
     * @var RoleRepository
     */
    private $role;
    /**
     * @var UserRepository
     */
    private $user;

    public function setUp()
    {
        parent::setUp();
        $this->role = app(RoleRepository::class);
        $this->user = app(UserRepository::class);
    }

    /** @test */
    public function it_registers_a_new_user_with_user_role()
    {
        $this->createRole('User');

        app(UserRegistration::class)->register([
            'email' => 'n.widart@gmail.com',
            'password' => 'demo1234',
        ]);

        $user = $this->user->find(1);

        self::assertCount(1, $this->user->all());
        self::assertEquals('n.widart@gmail.com', $user->email);
        self::assertEquals('User', $user->roles->first()->name);
    }

    private function createRole($name)
    {
        return $this->role->create([
            'name' => $name,
            'slug' => str_slug($name),
        ]);
    }
}
