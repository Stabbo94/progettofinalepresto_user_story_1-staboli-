<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center my-3">{{ __('ui.uploadArticle') }}</h1>
            </div>
        </div>
        
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <livewire:create-article-form/>
            </div>
        </div>
    </div>
</x-layout>