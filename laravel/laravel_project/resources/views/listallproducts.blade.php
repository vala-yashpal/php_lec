<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('products') }}
        </h2>
    </x-slot>

    <div class="py-4 flex">
        <div class="max-w-7xl ml-a sm:px-6 lg:px-8">
            <a href="addproduct" class="btn btn-primary ">add product</a>
        </div>
    </div>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>All Product list</h2>

                    <table class="table .table-striped table-bordered table table-hover">
                        <thead>
                            <tr>
                                tr
                                <th>id</th>
                                <th>title</th>
                                <th>price</th>
                                <th>quntity</th>
                                <th>description</th>
                                <th>action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($productdata as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_title }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_qunatity }}</td>
                                    <td>{{ $product->product_description }}</td>
                                    <td><a href="edit/{{ $product->id }}">edit</a> <a href="delete/{{ $product->id }}">delete</a></td>
                                </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
