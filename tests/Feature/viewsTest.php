<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class viewsTest extends TestCase
{
     use RefreshDatabase;
    
     /** @test */ 
   public function home () {

          $this->withoutExceptionHandling();

          $this->get(route("home"))->assertStatus(200);
   }

    /** @test */ 
    public function about () {

          $this->withExceptionHandling();

          $this->get("/about")->assertStatus(200);
   }

    /** @test */ 
    public function blog () {
          $this->withExceptionHandling();
          $this->get("/blog")->assertStatus(200);
   }

    /** @test */ 
   public function category () {
     $this->withExceptionHandling();
     $this->get("/category")->assertStatus(200);
   }
}











