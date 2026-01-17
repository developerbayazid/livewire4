<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Post;

new #[Layout('layouts::app', ['title' => 'Create Post'])] class extends Component
{
    public $title = '';
    public $content = '';

    public function save()
    {

        Post::create($this->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ]));

        $this->redirect('/');
    }

};
?>


<div>
    <h1 class="text-4xl font-bold text-gray-900 mb-2">Create Post</h1>
    <p class="text-gray-600 mb-8">Write and publish your new post</p>

    <form wire:submit="save" class="w-96 space-y-6">

        <flux:input wire:model="title" label="Title" />
        <flux:textarea wire:model="content" label="Content" />

        <flux:radio.group wire:model="status" label="Status" class="max-sm:flex-col">
            <flux:radio value="draft" label="Draft" description="Post will be save as draft" checked />
            <flux:radio value="published" label="Published" description="Post will be published immediately" />
        </flux:radio.group>

        <flux:button type="submit" variant="primary">Create Post</flux:button>

    </form>
</div>
