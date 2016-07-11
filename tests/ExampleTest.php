<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * Make a request to the application,
     * "click" a link in the returned response, and
     * then assert that we landed on a given URI
     *
     * @return void
     */
    public function testShowAboutUs()
    {
        //[START - visit home page, click on link 'About Us' and see /about-us page]
        $this->visit('/')
             ->click('About Us')
             ->seePageIs('/about-us');
        //[END - visit home page, click on link 'About Us' and see /about-us page]

    }

    /**
    * Visit "/register" page, check form inputs, 
    * press Register button and go to page "/dashboard"
    * @return void
    */
    public function testNewUserRegistration()
    {
        //[START - visit "/register" page, check input types, press button and go to "/dashboard" page]
        $this->visit('/register')
             ->type('Taylor', 'name')
             ->check('terms')
             ->press('Register')
             ->seePageIs('/dashboard');
        //[END - visit "/register" page, check input types, press button and go to "/dashboard" page]

    }
}
