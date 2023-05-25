<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background: #f7f7f7;
    }

    .table {
      border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
      display: inline-block;
    }

    .table td,
    .table th {
      vertical-align: middle;
      margin-bottom: 10px;
      border: none;
    }

    .table thead tr,
    .table thead th {
      border: none;
      font-size: 12px;
      letter-spacing: 1px;
      text-transform: uppercase;
      background: transparent;
    }

    .table td {
      background: #fff;
    }

    .table td:first-child {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .table td:last-child {
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .avatar {
      width: 2.75rem;
      height: 2.75rem;
      line-height: 3rem;
      border-radius: 50%;
      display: inline-block;
      background: transparent;
      position: relative;
      text-align: center;
      color: #868e96;
      font-weight: 700;
      vertical-align: bottom;
      font-size: 1rem;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .avatar-sm {
      width: 2.5rem;
      height: 2.5rem;
      font-size: 0.83333rem;
      line-height: 1.5;
    }

    .avatar-img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
    }

    .avatar-blue {
      background-color: #c8d9f1;
      color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed
      > tbody
      > tr[role="row"]
      > td:first-child:before,
    table.dataTable.dtr-inline.collapsed
      > tbody
      > tr[role="row"]
      > th:first-child:before {
      top: 28px;
      left: 14px;
      border: none;
      box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
      padding-left: 48px;
    }

    table.dataTable > tbody > tr.child ul.dtr-details {
      width: 100%;
    }

    table.dataTable > tbody > tr.child span.dtr-title {
      min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
      padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
      margin-bottom: 0;
    }

    @media (max-width: 767px) {
      div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        -ms-flex-pack: center !important;
        justify-content: center !important;
        margin-top: 1rem;
      }
    }

    .btn-icon {
      background: #fff;
    }
    .btn-icon .bx {
      font-size: 20px;
    }

    .btn .bx {
      vertical-align: middle;
      font-size: 20px;
    }

    .dropdown-menu {
      padding: 0.25rem 0;
    }

    .dropdown-item {
      padding: 0.5rem 1rem;
    }

    .badge {
      padding: 0.5em 0.75em;
    }

    .badge-success-alt {
      background-color: #d7f2c2;
      color: #7bd235;
    }

    .table a {
      color: #212529;
    }

    .table a:hover,
    .table a:focus {
      text-decoration: none;
    }

    table.dataTable {
      margin-top: 12px !important;
    }

    .icon > .bx {
      display: block;
      min-width: 1.5em;
      min-height: 1.5em;
      text-align: center;
      font-size: 1.0625rem;
    }

    .btn {
      font-size: 0.9375rem;
      font-weight: 500;
      padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
          background-color: #c8d9f1;
          color: #467fcf;
        }

        .avatar-pink {
          background-color: #fcd3e1;
          color: #f66d9b;
        }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row py-5">
      <div class="col-12">
        <table id="example" class="table table-hover responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>USER ID</th>
              <th>USER NAME</th>
              <th>P_Number</th>
              <th>Profession</th>
              <th>Date of Birth</th>
              <th>App Access</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="#">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-blue mr-3">EB</div>
                    <!-- <div class=""> -->
                      <p class="font-weight-bold mb-0">ethan-black@example.com</p>
                    <!-- </div> -->
                  </div>
                </a>
              </td>
              <td><p class="font-weight-bold mt-3">Ethan Black</p></td>
              <td><p class="font-weight-bold mt-3">996338522</p></td>
              <td><p class="font-weight-bold mt-3">Designer</p></td>
              <td><p class="font-weight-bold mt-3">09/04/1996</p></td>
              <td>
                <div class="badge badge-success badge-success-alt mt-3">Enabled</div>
              </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                          title="Actions"></i>
                      </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                    <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <script>
            $(document).ready(function() {
              $("#example").DataTable({
                aaSorting: [],
                responsive: true,

                columnDefs: [
                  {
                    responsivePriority: 1,
                    targets: 0
                  },
                  {
                    responsivePriority: 2,
                    targets: -1
                  }
                ]
              });

              $(".dataTables_filter input")
                .attr("placeholder", "Search here...")
                .css({
                  width: "300px",
                  display: "inline-block"
                });

              $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      </div>
    </div>
  </div>
</body>
</html>