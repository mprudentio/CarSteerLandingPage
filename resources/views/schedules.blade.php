@extends('layouts.main')

@section('container')
    <div class=" container mt-4" style="padding-bottom: 50px">
        <h1>Schedule</h1>
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Weekday/Weekend</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
            </tr>
            </thead>
            <tbody >
            @foreach ($schedules as $schedule)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $schedule["week"] }}</td>
                        <td>{{ $schedule["hari"] }}</td>
                        <td>{{ $schedule["jam"] }} WIB</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection