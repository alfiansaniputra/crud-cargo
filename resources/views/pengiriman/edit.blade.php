
@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1>CREATE</h1>

<form action="/pengiriman/{{$pengiriman->id}}" method="post">
    <input type="text" name="idbarang" value="{{$pengiriman->idbarang}}" placeholder="idbarang"><br>
    <input type="text" name="idkurir" value="{{$pengiriman->idkurir}}" placeholder="idkurir"><br>
	<input type="text" name="tujuan" value="{{$pengiriman->tujuan}}" placeholder="tujuan"><br>
    <input type="text" name="tglsampai" value="{{$pengiriman->tglsampai}}" placeholder="tglsampai"><br>

    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>