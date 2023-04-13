<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Products
        </h2>

        <div class="flex justify-between h-16">
            <div class="max-w-7xl ml-a sm:px-6 lg:px-8">
                <a href="addproduct" class="btn btn-primary ">add product</a>
            </div>
        </div>
    </x-slot>
   
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>All Product list</h2>
                    
                    @if (session('saveproduct-status'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <strong id="myAlert">alert!</strong> {{ session('saveproduct-status') }}
                            <button type="button" class="btn-close" id="myBtn" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                     @if (session('update-status'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <strong id="myAlert">alert!</strong> {{ session('update-status') }}
                            <button type="button" class="btn-close" id="myBtn" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong id="myAlert">alert!</strong> {{ session('status') }}
                            <button type="button" class="btn-close" id="myBtn" data-bs-dismiss="alert"></button>
                        </div>
                    @endif 

                    <table class="table table-striped table-bordered table table-hover">
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>price</th>
                                <th>quntity</th>
                                <th>description</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>
                        @foreach ($productdata as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_title }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_qunatity }}</td>
                                    <td>{{ $product->product_description }}</td>
                                    <td><img src="images/{{ $product->product_image }}" width="100px" alt="" width="100px">{{ $product->product_image }}</td>
                                    <td>
                                        <a class="btn btn-primary " href="editproduct/{{ $product->id }}">edit</a> 
                                        <a class="btn btn-danger" href="deleteproduct/{{ $product->id }}  ">delete</a>
                                    </td>
                                </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
