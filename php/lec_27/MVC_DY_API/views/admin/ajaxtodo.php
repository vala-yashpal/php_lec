
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Todo List</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">

                    <form method="post" onsubmit="event.preventDefault(); savetododata()">
                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control" name="todoitems" id="todoitems">
                            </div>
                            <div class="col-5">
                                <select name="status" class="form-control" id="status">
                                    <option value="Pending">Pending</option>
                                    <option value="Active">Active</option>
                                    <option value="Completed">Completed</option>
                                </select> 
                            </div>
                            <div class="col-2">   
                                <input type="submit" class ="btn btn-primary" name="savetodo" value="add" id="savetodo">
                            <div>
                        </div>
                    </form>
                    <script>

                        function savetododata(params) {
                            console.log("called");
                        }

                        
                       function getdatabyid(id){
                            console.log("edit",id);
                            let url = "http://localhost/php_lec_tops/php/lec_27/22_API/getdatabyid?id="+id;
                             fetch(url).then((response)=>response.json()).then((result)=>{

                                console.log(result.Data[0].todo_title);
                                document.getElementById('todoitems').value = result.Data[0].todo_title
                                drpVal = ["pending","Active","Completed"];
                                drpOption = ""
                                drpVal.forEach(element => {
                                    if(result.Data[0].status == element){
                                        drpOption += `<option selected>${element}</option>`
                                    }else{
                                        drpOption += `<option>${element}</option>`
                                    }
                                });
                                document.getElementById("status").innerHTML=drpOption
                             })
                        }


                        window.addEventListener('load', function () {
                            
                           let url = "http://localhost/php_lec_tops/php/lec_27/22_API/alltododata";

                            fetch(url).then((response)=>response.json()).then((result)=>{
                                console.log(result.Data);
                                
                                HTMLTableBodyTodoData = ""
                                result.Data.forEach(element => {
                                    console.log(element.todo_title);
                                    HTMLTableBodyTodoData += `<tr>
                                    <td>${element.id}</td>
                                    <td>${element.todo_title}</td>
                                    <td>${element.status}</td>
                                    <td><button class="btb btn-primary" onclick="getdatabyid(${element.id})">Edit</button> </td>
                                  
                                    </tr>`
                                });
                                document.getElementById("disptodo").innerHTML=HTMLTableBodyTodoData
                            })
                        })
                        

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
                                    <th>Srno</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <!-- <th>Contact_number</th>
                                    <th>Date_of_birth</th>
                                    <th>Action</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
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

