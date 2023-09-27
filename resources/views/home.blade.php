@extends("layouts.app")

@section("main")
    <section id="trains" class="container">
        <article class="row border border-dark fw-bolder heading-table align-items-center">
            <div class="col-1 p-3">
                CODICE T.
            </div>
            <div class="col-3 p-3">
                PARTENZA
            </div>
            <div class="col-3 p-3">
                ARRIVO
            </div>
            <div class="col-2 p-3">
                ORARIO DI PARTENZA
            </div>
            <div class="col-1 p-3">
                RITARDI
            </div>
            <div class="col-2 p-3">
                AZIENDA
            </div>
        </article>

        @foreach($trains as $train)
        <article class="row border border-dark {{$loop->odd ? 'bg-white' : 'bg-light'}}">
            <div class="col-1 p-3">
                {{$train->codice_treno}}
            </div>
            <div class="col-3 p-3">
                {{$train->stazione_di_partenza}}
            </div>
            <div class="col-3 p-3">
                {{$train->stazione_di_arrivo}}
            </div>
            <div class="col-2 p-3">
                {{date("Y-m-d H:i", strtotime($train->orario_di_partenza))}}
            </div>
            @if(!$train->cancellato)
            <div class="col-1 p-3">
                {{$train->in_orario ? "in orario" : "in ritardo"}}
            </div>
            @else
            <div class="col-1 p-3">
                cancellato
            </div>
            @endif
            <div class="col-2 p-3">
                {{$train->azienda}}
            </div>
        </article>
    @endforeach

        
    </section>
@endsection