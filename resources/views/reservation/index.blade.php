@extends('layouts.app')
@section('pageTitle', 'Mes reservations')

@section('content')
<section class="section-40">
    <div class="container">
        <h1>Mes reservations</h1>
        <div class="row">
            <div class="col-sm-12">
                <table class="striped centered responsive-table">
                    <thead>
                    <tr>
                        <th>Produits</th>
                        <th>Reservation</th>
                        <th>Consulter</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($mesReservations as $reservation)
                    <tr>
                        <td>{{$reservation->products->title}}</td>
                        <td>{{$reservation->created_at->diffForHumans()}}</td>
                        <td><a href="/reservation/{{$reservation->id}}">Voir en détail</a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection


@section('footer-scripts')
@endsection