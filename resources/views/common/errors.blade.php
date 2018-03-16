<head>
    {!! Html::style('css/form.css') !!}
</head>
@if (count($errors))
    <div class="message"> 
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="message">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
