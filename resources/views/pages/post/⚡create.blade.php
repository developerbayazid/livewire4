<?php

use Livewire\Component;

new #[Layout('layouts::app', ['title' => 'Create Post'])] class extends Component
{
    public $title = '';
    public $content = '';

    public function save()
    {
        $this->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ]);

        session()->flash('success', 'Post created!');
        $this->reset();
    }

};
?>


<div>
    <h1 class="text-4xl font-bold text-gray-900 mb-2">Create Post</h1>
    <p class="text-gray-600 mb-8">Write and publish your new post</p>

    <form wire:submit="save" class="w-96 space-y-6">

        <flux:input wire:model="title" label="Title" />
        <flux:textarea wire:model="content" label="Content" />
        <flux:button type="submit" variant="primary">Create Post</flux:button>
    </form>
</div>
