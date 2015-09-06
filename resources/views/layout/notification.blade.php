@if (count($errors->all()) > 0)
    <div class="alert alert-danger alert-block">
        <button class="close" data-close="alert"></button>
        @foreach($errors->all() as $error)
            <span>{!! $error !!} </span>
        @endforeach
    </div>

@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button class="close" data-close="alert"></button>
        @if(is_array($message))
            @foreach ($message as $m)
                <span class="inline-block">{!! $m !!} </span>
            @endforeach
        @else
            <span class="inline-block">{!! $message !!} </span>
        @endif
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissable">
        <button class="close" data-close="alert"></button>
        @if(is_array($message))
            @foreach ($message as $m)
                <span class="inline-block">{!! $m !!} </span>
            @endforeach
        @else
            <span class="inline-block">{!! $message !!} </span>
        @endif
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button class="close" data-close="alert"></button>
        @if(is_array($message))
            @foreach ($message as $m)
                <span class="inline-block">{!! $m !!} </span>
            @endforeach
        @else
            <span class="inline-block">{!! $message !!} </span>
        @endif
    </div>
@endif

@if ($message = Session::get('notice'))
    <div class="alert alert-warning alert-block">
        <button class="close" data-close="alert"></button>
        @if(is_array($message))
            @foreach ($message as $m)
                <span class="inline-block">{!! $m !!} </span>
            @endforeach
        @else
            <span class="inline-block">{!! $message !!} </span>
        @endif
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button class="close" data-close="alert"></button>
        @if(is_array($message))
            @foreach ($message as $m)
                <span class="inline-block">{!! $m !!} </span>
            @endforeach
        @else
            <span class="inline-block">{!! $message !!} </span>
        @endif
    </div>
@endif