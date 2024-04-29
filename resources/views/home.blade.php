@extends('layouts.app')



@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Tabella dei treni</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Example button
            </button>
        </div>
    </div>
    <section class="trains py-5">
        <div class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-4">
                        <div class="card m-1">
                            <div class="card-body text-left">
                                <strong>Azienda: </strong> {{ $train->azienda }}
                            </div>
                            <div class="card-body text-left">
                                <strong>Città di Partenza: </strong>{{ $train->stazione_di_partenza }}
                            </div>
                            <div class="card-body text-left">
                                <strong>Città di Arrivo: </strong>{{ $train->stazione_di_arrivo }}
                            </div>

                            <div class="card-body text-left">
                                <strong>Giorno di Partenza: </strong>{{ $train->giorno_di_partenza }}
                            </div>

                            <div class="card-body text-left">
                                <strong>Orario di Partenza: </strong>{{ $train->orario_di_partenza }}
                            </div>

                            <div class="card-body text-left">
                                <strong>Orario di Arrivo: </strong>{{ $train->orario_di_arrivo }}
                            </div>

                            <div class="card-body text-left">
                                <strong>Codice del treno: </strong>{{ $train->codice_treno }}
                            </div>

                        </div>
                    </div>

                @empty
                    <div class="col-12">
                        <p>
                            &#128554; Sorry no houses yet!
                        </p>

                    </div>
                @endforelse


            </div>
        </div>
    </section>
@endsection
