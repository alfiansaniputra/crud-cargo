index
<a href="pengiriman/create"> input pengiriman </a>
@foreach($pengiriman as $pengiriman)
		<a href="/pengiriman/{{$pengiriman->id}}"><p>{{ $pengiriman->idbarang }}</p></a>
    <p> {{ $pengiriman->idbarang}} </p>
    <p> {{ $pengiriman->idkurir}} </p>
    <p> {{ $pengiriman->tujuan}} </p>
    <p> {{ $pengiriman->tglsampai}} </p>
	<a href="/pengiriman/{{$pengiriman->id}}/edit"> EDIT</a>

	<form action="/pengiriman/{{$pengiriman->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach

