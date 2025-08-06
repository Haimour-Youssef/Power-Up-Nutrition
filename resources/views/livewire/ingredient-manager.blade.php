<div>
    <form wire:submit.prevent="{{ $isEditing ? 'update' : 'save' }}" class="mb-3">
        <div class="input-group mb-2">
            <input type="text" wire:model.defer="name" class="form-control" placeholder="Ingredient name">
            <input type="number" wire:model.defer="order" class="form-control" placeholder="Order" min="1">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    {{ $isEditing ? 'Update' : 'Add' }}
                </button>
                @if($isEditing)
                    <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                @endif
            </div>
        </div>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        @error('order') <span class="text-danger">{{ $message }}</span> @enderror
    </form>

    <ul class="list-group">
        @forelse($ingredients as $ingredient)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><b>{{ $ingredient->order }}-</b> {{ $ingredient->name }}</span>
                <span>
                    <button class="btn btn-sm btn-info" wire:click="edit({{ $ingredient->id }})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $ingredient->id }})">Delete</button>
                </span>
            </li>
        @empty
            <li class="list-group-item text-muted">@lang('crud.common.no_items_found')</li>
        @endforelse
    </ul>
</div>
