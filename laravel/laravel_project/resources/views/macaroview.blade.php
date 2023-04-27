@include('layouts.adminapp')
    <div class="container-xxl flex-grow-1 container-p-y">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                
                <!-- {{ __('macro') }} -->
            </h2>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="padding:15px"> 

                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
                        </div>
                        
                        <div class="form-group pt-3">
                            <label for="City_name">city Name</label>
                            {{ Form::selectCity("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.adminfooterapp')
