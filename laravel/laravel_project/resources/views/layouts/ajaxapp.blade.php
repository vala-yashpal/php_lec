<div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ajax ') }}

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
            
            <div class="d-flex flex-row-reverse p-2 pb-5">
                <input class="btn btn-danger" type="button" value="alert message" name="alertmessage" id="alertmessage">
            </div>

        </h2>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="post" id="myForm" name="product"  onsubmit="event.preventDefault(); saveproduct()" >
                            <div class="row" style="padding: 10px">
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-6 mt-2">
                                            <input class="form-control" placeholder="Enter product_title"  type="text" name="product_title" id="product_title">
                                        </div>
                                        <div class="col-6 mt-2">
                                            <textarea placeholder="Enter product_description" name="product_description" class="form-control" id="product_description">{{  $ProductsDataById->product_description ?? "" }}</textarea>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <input class="form-control" placeholder="Enter product_price" type="text"   name="product_price" id="product_price">
                                        </div>
                                        <div class="col-6 mt-2">
                                            <input class="form-control" placeholder="Enter product_qunatity" type="text" name="product_qunatity"  id="product_qunatity">
                                        </div>
                                        {{-- <div class="col-6 mt-2">
                                            <input type="file" class="form-control" name="product_image" id="product_image">
                                        </div> 
                                        <div class="col-6 mt-2">
                                            <input type="hidden" class="form-control" name="product_image_old" id="product_image_old">
                                        </div> --}}
                                        <div class=" mt-2">
                                            <input class="btn btn-primary btn-lg btn-block col-12 " type="submit" name="btn-save" id="btn-save">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    <div class="p-6 text-gray-900 dark:text-gray-100" style="padding:10px;">
                        <table class="table table-striped table-bordered table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quntity</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="listalldata">

                            </tbody>
                        </table>
                        @push('custom-scripts')
                        
                        <script>
                            
                            $(document).ready(function(){
                                $("#alertmessage").click(function(){
                                    // alert("delete btn");
                                    swal("delete btn");
                                    // swal({
                                    //     title : "Alert Message Title",
                                    //     text : "Here is the alert Message information.",
                                    //     type : 'info',
                                    //     showCancelButoonClass = "btn btn-primary",
                                    //     confirmButtonText : 'OK'
                                    // });

                                    // swal({
                                    //         title : "Confirmation ?",
                                    //         text : "Are You sure you want to delete record?",
                                    //         type : 'warning',
                                    //         showCancelButton : true,
                                    //         confirmButtonClass : "btn-danger",
                                    //         confirmButtonText : 'yes, plese Delete it!',
                                    //         cancelButoonText :"NO, please don't delete",
                                    //         closeOnConfirm : false,
                                    //         closeonCancel : false
                                    //     }, 
                                    //     function(isConfirm) {
                                    //         if(isConfirm) {
                                    //             swal("Delete!","Data has been successfully delete.","success");
                                    //         }else{
                                    //             swal("Cancelled","your data is safe now.","error");
                                    //         }
                                    //     });

                                });
                            });

                            function getprodutcs(){
                                fetch("http://localhost:8000/api/getallproductdata").then((returndata)=> returndata.json()).then((response)=>{
                                    // console.log(response);
                                    htmltable = ""
                                    response.forEach(element =>{
                                        // console.log(element);
                                        htmltable+=`
                                        <tr>
                                           <td>${element.id}</td> 
                                           <td>${element.product_title}</td> 
                                           <td>${element.product_price}</td> 
                                           <td>${element.product_qunatity}</td> 
                                           <td>${element.product_description}</td> 
                                           <td><img src="images/${element.product_image}"  width="100px"></td>  
                                           <td class="center_btn"><button class="btn btn-primary" onclick="getproductbyid(${element.id})">Edit</button> </td>
                                           <td class="center_btn"><button class="btn btn-danger" onclick="deleteproduct(${element.id})">Delete</button> </td> 
                                        </tr>`
                                    });
                                    // console.log(htmltable);
                                    document.getElementById("listalldata").innerHTML = htmltable;
                                })
                            }
                            window.onload = getprodutcs;

                            function getproductbyid(id){
                                console.log("edit",id);
                                fetch("http://localhost:8000/api/getproductbyid/"+id).then((returndata)=> returndata.json()).then((response)=>{
                                        document.getElementById('product_title').value = response.product_title,
                                        document.getElementById('product_description').innerHTML = response.product_description,
                                        document.getElementById('product_price').value = response.product_price,
                                        document.getElementById('product_qunatity').value = response.product_qunatity
                                        // document.getElementById('product_image_old').value = response.product_image
            
                                        var myForm = document.getElementById('myForm');
                                        document.getElementById('btn-save').value = "Update";
                                        myForm.setAttribute('onsubmit',`event.preventDefault(); updateproduct(${response.id})`)
                                    });
                            }
                            

                            function saveproduct() {
                                console.log("saveproduct called");
                                var result = {};
                                $.each($('#myForm').serializeArray(), function () {
                                    result[this.name] = this.value;
                                });
                                console.log(result);
                                fetch("http://localhost:8000/api/addproduct",{
                                method: 'POST',
                                headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(result)
                                }).then((response)=>response.json()).then((result)=> {
                                    console.log(result);
                                    // window.location.href="ajax";
                                    // location.reload();
                                    getprodutcs();
                                    
                                })
                            }

                            function updateproduct(id) {
                                // console.log(id);
                                var result = {};
                                $.each($('#myForm').serializeArray(), function () {
                                    result[this.name] = this.value;
                                });
                                console.log(result);

                                fetch("http://localhost:8000/api/updatepoduct/"+id,{
                                method: 'POST',
                                headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(result)
                                }).then((response)=>response.json()).then((result)=> {
                                    if(result != ""){
                                    var myForm = document.getElementById('myForm');
                                    document.getElementById("btn-save").value = "submit";
                                    myForm.setAttribute('onsubmit',`event.preventDefault(); saveproduct()`);
                                    }
                                    getprodutcs();
                                })
                            }

                            function deleteproduct(id){
                                // console.log("delete");
                            fetch("http://localhost:8000/api/deleteproduct/"+id,{
                                method: 'POST',
                                headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                                }}).then((response)=>response.json()).then((result)=> {

                                    console.log(result);
                                if(result == 1){
                                    alert("delete product successfuly!");
                                }
                                    getprodutcs();
                                    
                                })
                            }

                        </script>
                        @endpush
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
      