@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>        
@endif

{{-- <div class="alert">
    <h3>Alert {{$msg ?? ''}}</h3>
</div> --}}