<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Admin\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;

    private $makeService;

    //ADD THIS in TestCase

    //custom method created in TestCase to get logged_in user instance.
   /* public function isLoggedIn()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }
    */

    protected function setUp(): void
    {
        parent::setUp();

        $this->makeService = $this->post('services', [
           'name'=>'test string',
            'slug'=>'test string',
            'description'=>'some long string here',
            'image'=>'test string',
            'status'=>1,
            
        ]);
    }

    /** @test */
    public function service_can_be_created() :void
    {
        #Uncomment these if you have authentication system setup
        //$this->isLoggedIn();

        $response = $this->makeService;
        $response->assertStatus(302);

        $this->assertCount(1, Service::all());
    }

    /** @test */
    public function service_can_be_deleted() :void
    {
        //$this->isLoggedIn();

        //storing service
        $this->makeService;

        $this->assertCount(1, Service::all());

        //deleting stored service
        $service = Service::first();
        $service->delete('/services/' . $service->id);

        $this->assertCount(0, Service::all());
    }

    /** @test */
    public function service_can_be_updated() :void
    {
        //$this->isLoggedIn();

        //storing service
        $this->makeService;

        $this->assertCount(1, Service::all());

        //updating stored service
        $service = Service::first();

        $this->patch('/services/' . $service->id, [
            'name'=>'test string updated',
            'slug'=>'test string updated',
            'description'=>'some long string updated here',
            'image'=>'test string updated',
            'status'=>0,
            
        ])->assertStatus(302);

        $this->assertNotEquals($service->name, Service::first()->name);

        $this->assertCount(1, Service::all());
    }

    /** @test */
    public function service_pages_are_visible() :void
    {
        //$this->isLoggedIn();

        $this->get(route('services.index'))->assertStatus(200);
        $this->get(route('services.create'))->assertStatus(200);
    }

}
