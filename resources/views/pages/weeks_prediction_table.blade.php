@foreach ( $weeks as $key=> $week )
    <div class="row mb-4">
        <div class="col-4 card">
            <h4 class="text-center pt-3">League Table</h4>
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
                    @foreach ( $week['matches'] as $key=> $match )
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$match->name}}</td>
                        <td>{{$match->pts}}</td>
                        <td>{{$match->p}}</td>
                        <td>{{$match->w}}</td>
                        <td>{{$match->d}}</td>
                        <td>{{$match->l}}</td>
                        <td>{{$match->gd}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between mb-3">
                <button class="btn btn-outline-primary" onclick="test()" type="button">Play All</button>
                <button class="btn btn-outline-primary" type="button">Next Week</button>
            </div>
        </div>

        &nbsp;
        
        <div class="col-3 card">
            <h4 class="text-center pt-3">Match Results</h4>
            <table class="table table-striped">
                <span class="text-center">4th Week Match Result</span>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($week['results'] as $result )
                        <tr>
                            <td>{{$result->home}}</td>
                            <td>3:2</td>
                            <td>{{$result->away}}</td>
                        </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
         </div>

        &nbsp;

        <div class="col-3 card">
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
@endforeach