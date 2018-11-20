@extends('admin.app')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
  
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">

@endsection
@section('section')
<div class="content-wrapper">
  <div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Invoices List</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Invoice</a>
            </li>
            <li class="breadcrumb-item active">Invoices List
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
        id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item"
          href="component-buttons-extended.html">Buttons</a></div>
      </div>
    </div>
  </div>
  <div class="content-body">
    <section class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">Invoices</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
              <div class="heading-elements">
                <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Create Invoice</button>
                <span class="dropdown">
                  <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="true" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-download-cloud white"></i></button>
                  <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="la la-calendar"></i> Due Date</a>
                    <a href="#" class="dropdown-item"><i class="la la-random"></i> Priority </a>
                    <a href="#" class="dropdown-item"><i class="la la-bar-chart"></i> Balance Due</a>
                    <a href="#" class="dropdown-item"><i class="la la-user"></i> Assign to</a>
                  </span>
                </span>
                <button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Invoices List table -->
              <div class="table-responsive">
                <table id="invoices-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                  <thead>
                    <tr>
                      <th>
                        <input type="checkbox" class="input-chk-all">
                      </th>
                      <th>Date</th>
                      <th>Invoice #</th>
                      <th>Order No</th>
                      <th>Customer Name</th>
                      <th>Status</th>
                      <th>Due</th>
                      <th>Amount</th>
                      <th>Balance Due</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- PAID -->
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/2017</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>10/05/2017</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>16/07/2017</td>
                      <td><a href="#" class="text-bold-600">INV-001012</a></td>
                      <td>PO-001201</td>
                      <td>Andrew Davis</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>20/07/2017</td>
                      <td>$ 152.00</td>
                      <td>$ 100.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>12/11/2017</td>
                      <td><a href="#" class="text-bold-600">INV-001401</a></td>
                      <td>PO-014561</td>
                      <td>Megan Stephens</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>16/11/2017</td>
                      <td>$ 1450.00</td>
                      <td>$ 50.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>15/05/2017</td>
                      <td><a href="#" class="text-bold-600">INV-001201</a></td>
                      <td>PO-015201</td>
                      <td>Judith Carlson</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>20/05/2017</td>
                      <td>$ 1340.00</td>
                      <td>$ 150.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>18/06/2017</td>
                      <td><a href="#" class="text-bold-600">INV-005801</a></td>
                      <td>PO-002201</td>
                      <td>Harry Banks</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>23/06/2017</td>
                      <td>$ 560.00</td>
                      <td>$ 20.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>26/08/2017</td>
                      <td><a href="#" class="text-bold-600">INV-001011</a></td>
                      <td>PO-001201</td>
                      <td>Jeremy Wright</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>30/08/2017</td>
                      <td>$ 1821.00</td>
                      <td>$ 325.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>11/11/2017</td>
                      <td><a href="#" class="text-bold-600">INV-002101</a></td>
                      <td>PO-004511</td>
                      <td>Brittany Lewis</td>
                      <td>
                        <span class="badge badge-default badge-success badge-lg">Paid</span>
                      </td>
                      <td>16/11/2017</td>
                      <td>$ 1524.00</td>
                      <td>$ 562.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <!-- Overdue By 1-15 Days -->
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/12/2017</td>
                      <td><a href="#" class="text-bold-600">INV-01112</a></td>
                      <td>PO-008941</td>
                      <td>Doris Reyes</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>11/12/2017</td>
                      <td>$ 5685.00</td>
                      <td>$ 450.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>12/05/2017</td>
                      <td><a href="#" class="text-bold-600">INV-008101</a></td>
                      <td>PO-004229</td>
                      <td>Walter Robertson</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>18/05/2017</td>
                      <td>$ 1256.00</td>
                      <td>$ 45.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>20/01/2017</td>
                      <td><a href="#" class="text-bold-600">INV-004801</a></td>
                      <td>PO-001201</td>
                      <td>Edward Evans</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>25/01/2017</td>
                      <td>$ 850.00</td>
                      <td>$ 20.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>11/03/2017</td>
                      <td><a href="#" class="text-bold-600">INV-006548</a></td>
                      <td>PO-001345</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>16/03/2017</td>
                      <td>$ 1235.00</td>
                      <td>$ 123.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 1-15 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <!-- Overdue By 16-30 Days -->
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 16-30 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 16-30 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop16" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 16-30 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop17" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 16-30 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop18" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-warning badge-lg">Overdue By 16-30 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop19" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <!-- Overdue By 31-45 Days -->
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 31-45 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop20" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 31-45 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop21" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 31-45 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop22" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 31-45 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 31-45 Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop24" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <!-- Overdue By 45+ Days -->
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 45+ Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop25" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 45+ Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop26" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 45+ Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>06/05/201</td>
                      <td><a href="#" class="text-bold-600">INV-001001</a></td>
                      <td>PO-005201</td>
                      <td>Elizabeth Washington</td>
                      <td>
                        <span class="badge badge-default badge-danger badge-lg">Overdue By 45+ Days</span>
                      </td>
                      <td>06/05/201</td>
                      <td>$ 1200.00</td>
                      <td>$ 200.00</td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop28" type="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                          <span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                            <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                            <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                          </span>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>
                        <input type="checkbox" class="input-chk-all">
                      </th>
                      <th>Date</th>
                      <th>Invoice #</th>
                      <th>Order No</th>
                      <th>Customer Name</th>
                      <th>Status</th>
                      <th>Due</th>
                      <th>Amount</th>
                      <th>Balance Due</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!--/ Invoices table -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
@section('extra-js')

<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.colVis.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/pages/invoices-list.js" type="text/javascript"></script>

@endsection