<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="max-w-5xl">

    <div class="flex items-center justify-between pb-4">
        <!-- Left -->
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Posts</h1>
            <p class="mt-1 text-sm text-gray-500">
                Manage your blog posts and articles
            </p>
        </div>

        <!-- Right -->
        <div class="flex items-center gap-3">
            <!-- Sort -->
            <div class="flex items-center gap-2 text-sm text-gray-600">
                <span>Sort by:</span>
                <select
                    class="rounded-md border border-gray-300 bg-white px-3 py-1.5
                        text-sm text-gray-900 shadow-sm
                        focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                >
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Title</option>
                </select>
                <a class="border-gray-200" href="{{ route('posts.create') }}">Create Post</a>
            </div>
        </div>
    </div>

</div>
