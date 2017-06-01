
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

<form action="/pengiriman" method="post">
    <input type="text" name="idbarang" value="" placeholder="idbarang"><br>
    <input type="text" name="idkurir" value="" placeholder="idkurir"><br>
	<input type="text" name="tujuan" value="" placeholder="tujuan"><br>
    <input type="text" name="tglsampai" value="" placeholder="tglsampai"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>