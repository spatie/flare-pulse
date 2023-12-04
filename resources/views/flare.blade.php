@php
    use Illuminate\Support\Str;
@endphp
<x-pulse::card :cols="$cols" :rows="$rows" :class="$class">
    <x-pulse::card-header
        name="Name"
        title="Title"
        details="Details"
    >
        <x-slot:icon>
            <x-pulse::icons.queue-list/>
        </x-slot:icon>
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand" wire:poll.5s="">
        @if (true)
            <x-pulse::no-results/>
        @else
            <div class="grid gap-3 mx-px mb-px">
                @foreach ([1,2,3] as $number)
                    <div wire:key="{{ $site->id }}">
                        <h3 class="font-bold text-gray-700 dark:text-gray-300">
                            Title
                        </h3>

                        <div class="mt-3 relative">
                            Details
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </x-pulse::scroll>
</x-pulse::card>
