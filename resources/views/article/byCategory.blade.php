<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.exploreCategory') }}: {{ __("ui.$category->name") }}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
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