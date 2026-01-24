<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.exploreCategory') }}: {{ __("ui.$category->name") }}</h1>
            </div>
        </div>
        <div class="row g-4 my-5 justify-content-center">
            @forelse ($articles as $article)
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                <x-card :article="$article" />
            </div>
            @empty
            <div class="col-12 text-center">
                <h3>{{ __('ui.noArticlesCategory') }}</h3>
                @auth
                <a class="btn btn-dark my-5" href="{{route('create.article')}}">{{ __('ui.publishArticle') }}</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
</x-layout>