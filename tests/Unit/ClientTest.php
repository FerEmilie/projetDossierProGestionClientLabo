<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Client;
use App\Materiel;

class ClientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUn()
    {
        $this->assertTrue(true);
    }

    public function testUser()
    {
    $user = factory(User::class)->create();
    $response = $this->actingAs($user)
                 ->withSession(['foo' => 'bar'])
                 ->get('/');
      }

      public function testDatabase(){
        $this->assertDatabaseHas('clients', [
    'name' => 'efs'
]);
      }

      public function testClient()
      {
      $client = factory(Client::class)->create();
        }

        public function testMateriel()
        {
        $client = factory(Materiel::class)->create();
          }

}
