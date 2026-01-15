<body>
    <div>
        <h1>{{ __('ui.mailTitle') }}</h1>
        <h2>{{ __('ui.mailData') }}:</h2>
        <p>{{ __('ui.name') }}: {{ $user->name }}</p>
        <p>{{ __('ui.email') }}: {{ $user->email }}</p>
        <p>{{ __('ui.clickHere') }}:</p>
        <a href="{{route('make.revisor', compact('user'))}}">{{ __('ui.makeRevisor') }}</a>
    </div>
</body>