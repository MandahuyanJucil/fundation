<!-- resources/views/search_results.blade.php -->

@extends('layouts.app') <!-- Use your layout file here -->

@section('content')
    <h1>Search Results</h1>

    <!-- Search Form -->
    <form action="{{ route('mayashope.search') }}" method="GET">
        <input type="text" name="nameofchild" value="{{ request()->input('nameofchild') }}" placeholder="Search by Child's Name">
        <button type="submit">Search</button>
    </form>

    <!-- Display search results -->
    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name of Child</th>
                    <th>School</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Father's Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $item)
                    <tr>
                        <td>{{ $item->nameofchild }}</td>
                        <td>{{ $item->school }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->fathername }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
