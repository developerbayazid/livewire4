<?php

use Livewire\Livewire;

test('example', function () {
    Livewire::test('pages::post.create')
        ->set('title', 'Test Title')
        ->set('content', 'Test Content')
        ->call('save')
        ->assertRedirect('/');
});
