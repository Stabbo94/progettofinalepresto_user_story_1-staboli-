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
                <p>Photo preview:</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col d-flex flex-column align-items-center my-3">
                        <div class="img-preview mx-auto shadow rounded" 
                        style="background-image: url({{ $image->temporaryUrl() }});">
                    </div>
                    <button type="button" 
                    class="btn btn-danger mt-1 d-inline-flex align-items-center justify-content-center p-0 rounded-3" 
                    style="width: 40px; height: 40px;" 
                    wire:click="removeImage({{ $key }})">
                    x
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