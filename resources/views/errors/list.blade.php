@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $erro)
        <div class="container">
            <li>{{ $erro }}</li>
        </div>
        @endforeach
    </ul>
@endif