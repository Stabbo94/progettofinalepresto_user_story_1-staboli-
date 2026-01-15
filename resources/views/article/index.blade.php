<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.allArticles') }}</h1>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="row justify-content-center align-items-center my-3">
                @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article"/>
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center">{{ __('ui.noArticles') }}</h3>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>{{ $articles->links() }}</div>
    </div>
</x-layout>