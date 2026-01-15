<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center my-3">{{ __('ui.login') }}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{route('login')}}" method="POST" class="mb-5">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('ui.email') }}</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('ui.password') }}</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary w-100 text-start fw-bolder">{{ __('ui.login') }}</button>
                        </div>
                        <div class="col-12 mb-5">
                            <p>{{ __('ui.notRegistered') }}</p>
                            <a href="{{route('register')}}" class="btn btn-outline-warning w-100 text-start fw-bolder mb-5">{{ __('ui.register') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>