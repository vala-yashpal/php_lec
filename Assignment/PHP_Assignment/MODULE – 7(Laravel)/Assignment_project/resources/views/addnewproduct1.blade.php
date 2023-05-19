<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(isset($productById))
                {{ __('updatew_Products') }}
            @else
                {{ __('Add_New_Products') }}
            @endif
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                    @if(isset($productById))
                        <form action="/updateproduct/{{ $productById->id}}" method="post" enctype="multipart/form-data">
                    @else
                    <form action="/saveproduct" method="post" enctype="multipart/form-data">  
                    @endif
                        @csrf
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_title</label>
                            <div class="col-sm-10">
                                <input type="tetx" class="form-control" name="product_title" id="product_title" value="{{ $productById->product_title ?? "" }}" placeholder="Enter product_title">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_price" id="product_price" value="{{$productById->product_price  ?? ""}}" placeholder="Enter product_price">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_description</i></label>
                            <div class="col-sm-10">
                                <textarea class="form-control rounded-0" name="product_description" id="product_description" placeholder="Enter product_description">{{$productById->product_description  ?? ""}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_qunatity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_qunatity" id="product_qunatity" value="{{$productById->product_qunatity  ?? ""}}" placeholder="Enter product_qunatity">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="product_image" accept="image/*" id="product_image" >
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">product_image_old</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_image_old" value="{{$productById->product_image  ?? ""}}" id="product_image_old">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <input type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
                        </div>        
                    </form>
                      
                    {{-- {!! Form::open(['url' => 'foo/bar']) !!}
                    {!! Form::close() !!}  --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
