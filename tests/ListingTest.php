<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ListingTest extends TestCase
{
    /**
     * Test the listing api endpoint.
     *
     * @return void
     */
    public function testListingAPIEndpoint()
    {
        $this->get('/');

        $this->assertEquals(
            '{"status":"success","collection":[{"id":1,"title":"Transformers","category":"Comedy \/ Drama"},{"id":2,"title":"Knives out","category":"Mystery \/ Crime"}]}', $this->response->getContent()
        );
    }
}
