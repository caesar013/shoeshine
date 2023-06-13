@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="user_id">ID</th>
                            <th scope="col" class="sort" data-sort="material">Material</th>
                            <th scope="col" class="sort" data-sort="color">Color</th>
                            <th scope="col" class="sort" data-sort="model">Model</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($shoe->count() > 0)
                            @foreach ($shoe as $s)
                                <tr>
                                    <td>{{ $s->user->user_id }}</td>
                                    <td>{{ $s->material }}</td>
                                    <td>{{ $s->color }}</td>
                                    <td>{{ $s->model }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="4">
                                    Data tidak ada
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush
