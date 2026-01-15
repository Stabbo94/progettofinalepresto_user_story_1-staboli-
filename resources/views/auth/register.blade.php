<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center my-3">{{ __('ui.register') }}</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('ui.name') }}</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('ui.email') }}</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('ui.password') }}</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('ui.confirmPassword') }}</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-primary w-100 text-start fw-bolder">{{ __('ui.register') }}</button>
                    </div>
                    <div class="col-12">
                        <p>{{ __('ui.alreadyRegistered') }}</p>
                        <a href="{{route('login')}}" class="btn btn-outline-warning w-100 text-start fw-bolder">{{ __('ui.loginToAccount') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>