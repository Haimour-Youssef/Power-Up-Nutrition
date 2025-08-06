@php $editing = isset($recette) @endphp

<div class="row">
    
    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $recette->image ? \Storage::url($recette->image) : '' }}')"
        >
            <x-inputs.partials.label
                name="image"
                label="Image"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image"
                    id="image"
                    @change="fileChosen"
                />
            </div>

            @error('image') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="title"
            label="Title"
            :value="old('title', ($editing ? $recette->title : ''))"
            maxlength="255"
            placeholder="Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Description"
            required
            >{{ old('description', ($editing ? $recette->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-6">
        <x-inputs.select name="type" label="Category" required>
            <option value="petit-dejeuner" {{ old('type', ($editing ? $recette->type : '')) === 'Petit-dejeuner' ? 'selected' : '' }}>Petit-déjeuner</option>
            <option value="dejeuner" {{ old('type', ($editing ? $recette->type : '')) === 'Dejeuner' ? 'selected' : '' }}>Déjeuner</option>
            <option value="diner" {{ old('type', ($editing ? $recette->type : '')) === 'Diner' ? 'selected' : '' }}>Dîner</option>
            <option value="snack" {{ old('type', ($editing ? $recette->type : '')) === 'Snack' ? 'selected' : '' }}>Snack</option>
            <option value="boisson" {{ old('type', ($editing ? $recette->type : '')) === 'Boisson' ? 'selected' : '' }}>Boisson</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-6">
        <x-inputs.number
            name="Preparation"
            label="Preparation (minutes)"
            :value="old('Preparation', ($editing ? $recette->Preparation : ''))"
            step="0.01"
            placeholder="Preparation"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-6">
        <x-inputs.number
            name="Portions"
            label="Portions"
            :value="old('Portions', ($editing ? $recette->Portions : ''))"
            step="0.01"
            placeholder="Portions"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-6">
        <x-inputs.number
            name="Calories"
            label="Calories (Kcal)"
            :value="old('Calories', ($editing ? $recette->Calories : ''))"
            step="0.01"
            placeholder="Calories"
            required
        ></x-inputs.number>
    </x-inputs.group>

</div>
