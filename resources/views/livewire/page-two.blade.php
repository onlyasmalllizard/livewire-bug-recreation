<div>
    <h2>Page 2</h2>

    <button wire:click="$dispatch('testEvent', 'hello!')">Click me!</button>
</div>
@script
<script>
    Livewire.on('testEvent', (message) => {
        $wire.$parent.$set('testProperty', message);
    });
</script>
@endscript
