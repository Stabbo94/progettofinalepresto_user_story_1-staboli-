<div class="row justify-content-center">
    <div class="col-12 col-md-4">
        <form class="my-3 rounded mb-5" wire:submit="store">
            
            @if(session()->has('success'))
            <div class="alert alert-success text-center">
                {{ __('ui.successMessage') }}
            </div>
            @endif
            
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('ui.title') }}</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
                @error('title')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">{{ __('ui.description') }}</label>
                <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
                @error('description')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">{{ __('ui.priceEur') }}</label>
                <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">
                @error('price')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="category" class="form-label">{{ __('ui.categories') }}</label>
                <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                    <option label disabled selected>{{ __('ui.selectCategory') }}</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ __("ui.$category->name") }}</option>                
                    @endforeach
                </select>
                @error('category')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <input type="file" wire:model.live="temporary_images" multiple 
                class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                @error('temporary_images.*')
                <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
                @error('temporary_images')
                <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            @if (!empty($images))
            <div class="mb-3">
                <p>Pics preview:</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col-12 col-sm-6 col-md-4 d-flex flex-column align-items-center my-3">
                        <img src="{{ $image->temporaryUrl() }}" 
                        class="img-fluid shadow rounded" 
                        style="width: 200px; height: 200px; object-fit: contain;" 
                        alt="Preview">
                        
                        <button type="button" 
                        class="btn btn-danger mt-2 d-inline-flex align-items-center justify-content-center p-0 rounded-3" 
                        style="width: 40px; height: 40px;" 
                        wire:click="removeImage({{ $key }})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        <div class="row mt-4">
            <div class="col-12 mb-5">
                <button type="submit" class="btn btn-primary w-100 text-start fw-bolder">{{ __('ui.createBtn') }}</button>
            </div>
        </div>
        
    </form>
</div>
</div>