@extends("mainLayout")

@section("content")

<p>senza variabile</p>
<div class="numeri">
  @for ($i=1; $i <= 100; $i++)
    <div class="box">
      <p>{{$i}}</p>
    </div>
  @endfor
</div>

<p>con variabile max spedita dal web.php</p>
<div class="numeri">
  @for ($i=1; $i <= $max; $i++)
    <div class="box">
      <p>{{$i}}</p>
    </div>
  @endfor
</div>

@endsection
