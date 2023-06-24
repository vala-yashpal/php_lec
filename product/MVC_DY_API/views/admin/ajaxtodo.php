
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Todo List</h1>
    </div>

    <style>
        .center_btn
        {
            text-align:center;
        }
    </style>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">

                    <form method="post" id="myForm" name="savetodo" onsubmit="event.preventDefault(); savetododata()">

                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control" name="todo_title" id="todoitems" placeholder = "enter value" required>
                            </div>
                            <div class="col-5">
                                <select name="status" class="form-control" id="status" required>
                                    <option value="Pending">Pending</option>
                                    <option value="Active">Active</option>
                                    <option value="Completed">Completed</option>
                                </select> 
                            </div>
                            <div class="col-2">   
                                <input type="submit" class ="btn btn-primary"  name="savetodo" value="Add" id="savetodo">
                            <div>
                        </div>

                    </form>
                    <script>

                        function savetododata(id) {

                            console.log("savetododata called");

                            var result = {};
                            $.each($('#myForm').serializeArray(), function () {
                                result[this.name] = this.value;
                            });
                            console.log(result);
                            fetch("http://localhost/php_lec_tops/php/lec_27/22_API/inserttodo",{
                            method: 'POST',
                            headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(result)
                            }).then((response)=>response.json()).then((result)=> {
                                load_deta();
                            })
                            
                        }

                        function updatetododata(id) {
                            console.log(id);
                            console.log("upadatetododata");
                           
                            var result = {};
                            $.each($('#myForm').serializeArray(), function () {
                                result[this.name] = this.value;
                            });
                            // console.log(result);
                            fetch("http://localhost/php_lec_tops/php/lec_27/22_API/updatetodo?id="+id,{
                            method: 'POST',
                            headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(result)
                            }).then((response)=>response.json()).then((result)=> {
                                if(result != ""){
                                var myForm = document.getElementById('myForm');
                                document.getElementById("savetodo").value = "add";
                                myForm.setAttribute('onsubmit',`event.preventDefault(); savetododata()`);
                                }
                                load_deta();
                            })
                        }

                        function deletetodo(id) {
                            
                            // console.log(id);
                            // console.log("deletetododata");
                        
                            fetch("http://localhost/php_lec_tops/php/lec_27/22_API/delettodo?id="+id,{
                            method: 'POST',
                            headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                            }}).then((response)=>response.json()).then((result)=> {
                                console.log(result);
                            if(result.Code == 1){
                                alert("delete seccussfully");
                            }
                                load_deta();
                            })
                        }

                        
                       function getdatabyid(id){

                            console.log("edit",id);

                            let url = "http://localhost/php_lec_tops/php/lec_27/22_API/getdatabyid?id="+id;

                             fetch(url).then((response)=>response.json()).then((result)=>{
                                // console.log(result.Data[0].todo_title);
                                document.getElementById('todoitems').value = result.Data[0].todo_title;
                                drpVal = ["pending","Active","Completed"];

                                drpOption = ""

                                drpVal.forEach(element => {
                                    "pending","Active","Completed"
                                    if(result.Data[0].status == element){
                                        drpOption += `<option selected>${element}</option>`
                                    }else{
                                        drpOption += `<option>${element}</option>`
                                    }
                                });
                                document.getElementById("status").innerHTML=drpOption

                                var myForm = document.getElementById('myForm');
                                document.getElementById("savetodo").value = "Update";
                                myForm.setAttribute('onsubmit',`event.preventDefault(); updatetododata(${result.Data[0].id})`);
                            })
                        }

          


                        window.addEventListener('load', function () {
                            load_deta();
                        })
                        
                        function load_deta()
                        {
                            let url = "http://localhost/php_lec_tops/php/lec_27/22_API/alltododata";

                            fetch(url).then((response)=>response.json()).then((result)=>{
                            console.log(result.Data);
                                
                            var HTMLTableBodyTodoData = ""

                                result.Data.forEach(element => {
                                    // console.log(element.todo_title);
                                    HTMLTableBodyTodoData += `<tr>
                                    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td>${element.id}</td>
                                    <td>${element.todo_title}</td>
                                    <td>${element.status}</td>
                                    <td class="center_btn"><button class="btn btn-primary" onclick="getdatabyid(${element.id})">Edit</button> </td>
                                    <td class="center_btn"><button class="btn btn-danger" onclick="deletetodo(${element.id})">delete</button> </td>
                                    </tr>`
                                });  

                                document.getElementById("disptodo").innerHTML=HTMLTableBodyTodoData
                            })
                        }
                        
                        // $( document ).ready(function() {
                        //     console.log( "ready!" );
                        // });
                            
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox" id="check" name="check" value=""></th>
                                    <th>Srno</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>select</th>
                                    <th>Srno</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <!-- <th>Id</th>
                                    <th>User_name</th>
                                    <th>Email</th>
                                    <th>Contact_number</th>
                                    <th>Date_of_birth</th>
                                    <th>Action</th> -->
                                </tr>
                            </tfoot>
                            <tbody id="disptodo">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

