@extends ('layout.app')


@section ('content')

   <div class="container">

        <div class="row">

            @foreach ($movies as $movie)
                
            

            <div class="col-3">

                <div class="card m-3">

                    <h3>

                        {{ $movie->title }}

                    </h3>

                    <p>

                        Nazionalità: {{ $movie->nationality }}
                    </p>

                    <p>
                        Data d'uscita: {{ $movie->date }}
                    </p>

                    <p>

                        Voto: {{ $movie->vote }}
                    </p>

                </div>


            </div>

            @endforeach
        </div>

   </div>
    
@endsection