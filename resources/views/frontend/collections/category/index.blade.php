@extends('layouts.app')

@section('content')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Reserveren</h4>
                </div>

                <!-- zoekt de categorie die ik heb toegevoegd-->
                @forelse($categories as $index => $categoryItem)
                    <div class="col-6 col-md-4">
                        <div class="category-card">
                            <a href="{{ url('/collections/'.$categoryItem->slug) }}">
                                <div class="category-card-img">
                                    <img src="{{ asset("$categoryItem->image") }}" class="w-100" alt="Filmcamera">
                                </div>
                                <div class="category-card-body">
                                    <h5>{{ $categoryItem->name }}</h5>

                                        @csrf
                                        <input type="hidden" name="category_id" value="{{ $categoryItem->id }}">
                                        <button type="submit">Reserve Products</button>

                                </div>
                            </a>
                        </div>
                    </div>
                    @if (($index + 1) % 3 == 0)
                        <div class="w-100"></div> <!-- Add a new row after every 3rd category -->
                    @endif
                @empty
                    <div class="col-md-12">
                        <h5>Geen Categories Beschikbaar</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
