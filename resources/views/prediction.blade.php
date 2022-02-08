@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row content">
        <div class="col-7 card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Teams</th>
                        <th scope="col">PTS</th>
                        <th scope="col">P</th>
                        <th scope="col">W</th>
                        <th scope="col">D</th>
                        <th scope="col">L</th>
                        <th scope="col">GD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-primary" type="button">Play All</button>
                <button class="btn btn-outline-primary" type="button">Next Week</button>
            </div>

        </div>&nbsp;&nbsp;
        <div class="col-4 card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">4th Week Prediction of Championship</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection