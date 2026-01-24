<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.allArticles') }}</h1>
            </div>
        </div>
        
        <div class="container">
            <div class="row g-4 my-3">
                @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                    <x-card :article="$article"/>
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center mt-5">{{ __('ui.noArticles') }}</h3>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-center my-5">
        {{ $articles->links() }}
    </div>
</x-layout>