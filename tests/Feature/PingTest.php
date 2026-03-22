<?php

it('returns 200 from ping endpoint', function () {
    $response = $this->getJson('/api/ping');

    $response->assertStatus(200)
             ->assertJsonStructure(['message']);
});
