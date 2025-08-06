@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('recettes.index') }}" class="mr-4"><i class="icon ion-md-arrow-back"></i></a>
                    @lang('crud.recettes.show_title')
                </h4>

                <div class="mt-4">
                    <div class="mb-4 text-center">
                        <h2>{{ $recette->title ?? '-' }} ({{ $recette->type ?? '' }})</h2>
                    </div>
                    <div class="row mb-4">
                        <div class="mb-4 col-12 col-md-6 col-lg-4">
                            <x-partials.thumbnail src="{{ $recette->image ? asset('storage/' . $recette->image) : '' }}"
                                class="img-fluid border rounded" />
                        </div>
                        <div class="mb-4 col-12 col-md-6 col-lg-8">
                            <h5>@lang('crud.recettes.inputs.description')</h5>
                            <span>{{ $recette->description ?? '-' }}</span>
                        </div>
                    </div>
                    <h5 class="mb-4">
                        <span class="badge rounded-pill text-bg-light"><b>@lang('crud.recettes.inputs.Preparation') : </b>{{ $recette->Preparation ?? '-' }} min</span>
                        <span class="badge rounded-pill text-bg-light"><b>@lang('crud.recettes.inputs.Portions') : </b>{{ $recette->Portions ?? '-' }}</span>
                        <span class="badge rounded-pill text-bg-light"><b>@lang('crud.recettes.inputs.Calories') : </b>{{ $recette->Calories ?? '-' }} Kcal</span>
                    </h5>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6 mb-4">
                            <h5>@lang('crud.ingredients.index_title')</h5>
                            @livewire('ingredient-manager', ['recetteId' => $recette->id])
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <h5>@lang('crud.instructions.index_title')</h5>
                            @livewire('instruction-manager', ['recetteId' => $recette->id])
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ route('recettes.index') }}" class="btn btn-light">
                        <i class="icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Recette::class)
                        <a href="{{ route('recettes.create') }}" class="btn btn-light">
                            <i class="icon ion-md-add"></i> @lang('crud.common.create')
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
