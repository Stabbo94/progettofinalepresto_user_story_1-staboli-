<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.allArticles') }}</h1>
            </div>
        </div>
        <div class="container text-center"> <div class="row justify-content-center g-4 my-3"> @forelse ($articles as $article)
            <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
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
<div class="d-flex justify-content-center mt-4">
    <div>{{ $articles->links() }}</div>
</div>
</x-layout>