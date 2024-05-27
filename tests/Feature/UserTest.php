<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Testing\Assert;
use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * Setup before each test run
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed --class=DatabaseSeeder');
    }

    /**
     * A basic feature test example.
     */
    public function testUserCreateSuccess(): void
    {
        $user = User::first()->toArray();
        $expected = [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'foto' => 'https://avatar.vercel.sh/admin',
        ];
        $this->assertStringContainsString($expected['name'], $user['name']);
        $this->assertStringContainsString($expected['email'], $user['email']);
        $this->assertStringContainsString($expected['foto'], $user['foto']);
    }

}
