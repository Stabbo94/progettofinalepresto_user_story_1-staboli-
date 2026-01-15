<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.revisorDashboard') }}</h1>
            </div>
        </div>
        
        @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }}
            </div>
        </div>
        @endif
        
        <div class="container-fluid text-center">
            <div class="row justify-content-center align-items-center my-3">
                
                @if ($article_to_check)
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="https://picsum.photos/300" 
                                class="img-fluid rounded shadow" 
                                alt="immagine segnaposto"
                                >
                            </div>
                            @endfor
                        </div>
                    </div>
                    
                    <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="text-start">{{ $article_to_check->title }}</h1>
                            <h3 class="text-start">{{ __('ui.uploadedBy') }}: {{ $article_to_check->user->name }}</h3>
                            <h4 class="text-start">EUR {{ number_format($article_to_check->price,2,',','.')}}</h4>
                            <<h4 class="text-start fst-italic text-muted">#{{ __("ui." . $article_to_check->category->name) }}</h4>
                            <p class="h6 text-start">{{ $article_to_check->description }}</p>
                        </div>
                        
                        <div class="d-flex pb-4 justify-content-around">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 px-5 fw-bold">{{ __('ui.reject') }}</button>
                            </form>
                            
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 px-5 fw-bold">{{ __('ui.accept') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center align-items-center height-custom text-center">
                    <div class="col-12">
                        <h1 class="fst-italic display-4">
                            {{ __('ui.noArticlesToReview') }}
                        </h1>
                        <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">{{ __('ui.backHome') }}</a>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div>
</x-layout>