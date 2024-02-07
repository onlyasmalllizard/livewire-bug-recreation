<div>
    <h1>{{ $testProperty }}</h1>

    @if($currentPage === 1)
        <livewire:page-one />
    @else
        <livewire:page-two />
    @endif

    <button wire:click="$set('currentPage', {{ $currentPage === 1 ? 2 : 1 }})">
        {{ $currentPage === 1 ? 'Next' : 'Back' }}
    </button>
</div>
