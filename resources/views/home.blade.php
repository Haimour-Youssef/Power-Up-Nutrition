@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row mb-4">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <span class="badge bg-primary text-white" style="font-size:1.2rem;padding:1em 2em;">Recettes: {{ \App\Models\Recette::count() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <span class="badge bg-success text-white" style="font-size:1.2rem;padding:1em 2em;">Subscribers: {{ \App\Models\User::count() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <canvas id="subscribersChart" height="80"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $subscribersByMonth = \App\Models\User::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
                            ->groupBy('month')
                            ->orderBy('month')
                            ->pluck('count', 'month');
                    @endphp
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-light"><b>Latest Recettes</b></div>
                                <div class="card-body p-0">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Preparation</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(\App\Models\Recette::orderBy('created_at','desc')->take(5)->get() as $recette)
                                                <tr>
                                                    <td>{{ $recette->title }}</td>
                                                    <td>{{ \Illuminate\Support\Str::limit($recette->description, 30) }}</td>
                                                    <td>{{ $recette->Preparation }} min</td>
                                                    <td>{{ $recette->created_at ? $recette->created_at->diffForHumans() : '' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 m-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-light"><b>Latest Subscribers</b></div>
                                <div class="card-body p-0">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Registered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(\App\Models\User::orderBy('created_at','desc')->take(5)->get() as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->created_at ? $user->created_at->diffForHumans() : '' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var ctx = document.getElementById('subscribersChart').getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: {!! json_encode(array_keys($subscribersByMonth->toArray())) !!},
                                    datasets: [{
                                        label: 'Subscribers by Month',
                                        data: {!! json_encode(array_values($subscribersByMonth->toArray())) !!},
                                        borderColor: '#38c172',
                                        backgroundColor: 'rgba(56,193,114,0.1)',
                                        fill: true,
                                        tension: 0.3,
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: { display: false },
                                    },
                                    scales: {
                                        y: { beginAtZero: true }
                                    }
                                }
                            });
                        });
                    </script>
@endsection
