<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="T3IvrB0h5oKZq9yQsfXOqyjjpzPz1IgOBTYgfBEj">
 <title>Category & Arms
 </title>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/fontawesome-free/css/all.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/css/adminlte.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=wcMxU8uDKBJGrjYq075gvqw_cTH8zUupD6EiiyKHjDiaf6ZPOxEpVGWr69ZUn_MMbrAIh1gR_yLwN5nPYLNK0FvqvzoJt0FztEFsdvz-t_4" charset="UTF-8"></script>
 <script src="https://portal.schoolpetal.com/assets/js/littlealert.js"></script>

 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


 <link rel="icon" href="https://portal.schoolpetal.com/assets/img/favicon.png">

 <style>
  .profile_pics {
   width: 50px;
   height: 50px;
  }

  .object-cover {
   object-fit: cover;
  }

  .profile-user-img {
   width: 100px;
   height: 100px;
  }
 </style>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">


 ?<?php include("../nav.php") ?>


  <div class="content-wrapper">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Category & Arms</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Category & Arms</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-6 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title ">
         <i class="fa fa-plus-square" aria-hidden="true"></i>
         Add Class Category
        </h3>
       </div>
       <div class="card-body pb-0">
        <form action="" id="createClassCategory">
         <div class="form-group">
          <label>Category</label>
          <input type="text" name="category" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
         </div>
         <div class="form-group float-right">
          <button class="btn btn-secondary createClassCategory">Add Category</button>
         </div>
        </form>
       </div>
      </div>

      <div class="card card-secondary card-outline">
       <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
         <h3 class="card-title ">
          <i class="fa fa-list-alt" aria-hidden="true"></i>
          Class Categories
         </h3>
        </div>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>Category</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="category_list_body">
           <tr>
            <td colspan="12">
             <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Category ...</i> </div>
            </td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>

      </div>


     </div>

     <div class="col-md-6 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title ">
         <i class="fa fa-plus-square" aria-hidden="true"></i>
         Add Class Arm
        </h3>
       </div>
       <div class="card-body pb-0">
        <form action="" id="createArm">
         <div class="form-group">
          <label>Arm</label>
          <input type="text" name="arm" class="form-control" placeholder="Enter Class Arm i.e A, B, C">
         </div>
         <div class="form-group float-right">
          <button class="btn btn-secondary createArm">Add Arm</button>
         </div>
        </form>
       </div>
      </div>

      <div class="card card-secondary card-outline">
       <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
         <h3 class="card-title ">
          <i class="fa fa-list-alt" aria-hidden="true"></i>
          Class Arms
         </h3>
        </div>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>Arm</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="arm_list_body">
           <tr>
            <td colspan="12">
             <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Arms ...</i> </div>
            </td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>


   <div class="modal fade" id="editClassCategoryModal">
    <div class="modal-dialog modal-dialog-centered ">
     <div class="modal-content">
      <div class="modal-header">
       <p class="modal-title text-bold">Edit Class Category</p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form action="" id="editCategoryForm">
        <div class="form-group">
         <label>Category</label>
         <input type="text" name="category" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
         <input type="hidden" name="category_id">
        </div>
        <div class="form-group float-right">
         <button class="btn btn-secondary updateCategory">Update Category</button>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>


   <div class="modal fade" id="editClassArmModal">
    <div class="modal-dialog modal-dialog-centered ">
     <div class="modal-content">
      <div class="modal-header">
       <p class="modal-title text-bold">Edit Class Arm</p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form action="" id="editArmForm">
        <div class="form-group">
         <label>Arm</label>
         <input type="text" name="arm" class="form-control" placeholder="Enter Class Amr i.e A, B, C">
         <input type="hidden" name="arm_id">
        </div>
        <div class="form-group float-right">
         <button class="btn btn-secondary updateArm">Update Arm</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>

   <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

   <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTk5OWMwOTFhY2U3ZDRlZTc3YTYzMzE1MzRkN2I4NGI0ODBkZTBmZmNhYjljYjdjZjY2Y2JjZTJmZTE3NDM1ZTkxZmYyODEzYTY0ODU0NGEiLCJpYXQiOjE2OTE1NzY1NjguMTYwMDIxLCJuYmYiOjE2OTE1NzY1NjguMTYwMDI5LCJleHAiOjE3MjMxOTg5NjguMDc2NDA3LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.XwtNpSIqnRgoTmMRyqeT4c5WtFXTBCtdjJCL2HFtkU7oqa_RgMnetackgTetQsx6rfWWf40T3Fta3IfcGa_tMB2VJJBNjQUNbD_Y2QOU6eY1QH6AkEabD-l55RbKGeb2Knn-gqe0ggu-6JtdRKfgztVgRLqLiwNhR5dbUDEZhGZLmNggqYPxT97ZFWa_vvFIjj7EDaAQ0hFDWaPoXY1SN3s7vrY8OGQTCFlQmBoNRcsLZ8z6pT-Ur5aN1AOyIhAxIR4vv8ZPApBS3ABSKLBezo_v-I4iC37oCTO2hj6vkbfcBlRa_nYm-U89Dc8_q_S3iXh1h2Y6HfjWLF8DqnwFgFOySlGCj9pKh1NwQr8Kp1W0AdXdhToLiGAn57xj7n_UnCfmKgSt2skDI6FQoOY8_GPo6jrUNabFfAcKNsHkgDcH6jCI6YQrNO06aPG0Dk6zbc-RH9CHVjyqSW7gVKS36U2FhQhOeHI4uK7jncCjxG_Np-7WIJcTP5bAn8P4EAYZuxYzU0EiGZCAlXELlbsMwXUx68J_ZsFcqyoOVeOlD_1DF-mwJO59o1Dt-Awfg678t207KaRqqyFNU2MxFwcZyWh5a0VCisxuhlwljVXGsfWLVkPtRkrKIpHJXlaqQj2HeghggoitwO2qCIcSkeXAamEVZVngbHvxab0Fx1fmrxk`
      }
     });


     function fetchClassCategory() {
      $.ajax({
       method: 'get',
       url: api_url + 'get_class_category'
      }).done(function(res) {
       body = $('#category_list_body')
       body.html(``);
       res.data.map(cat => {
        body.append(`
                            <tr>
                                <td>${cat.category}</td>
                                <td>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-primary editCategory" data-data='${JSON.stringify(cat)}'><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                            </tr>
                        `)
       })
      }).fail(function(res) {
       // parseError(res.rsponseJSON);
      })
     }

     fetchClassCategory();


     $('body').on('click', '.editCategory', function() {
      data = $(this).data('data');
      modal = $('#editClassCategoryModal')
      modal.modal('show')
      $(modal).find('input[name="category"]').val(data.category)
      $(modal).find('input[name="category_id"]').val(data.id)
      $(modal).find('.modal-title').html(`Edit Class Category (${data.category})`)
     })

     $('#editCategoryForm').on('submit', function(e) {
      e.preventDefault();
      form = $(this)
      category = $(form).find('input[name="category"]').val();
      category_id = $(form).find('input[name="category_id"]').val();
      if (!category) {
       littleAlert('The class category field is required', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'update_class_category',
       data: {
        category: category,
        category_id: category_id,
       },
       beforeSend: () => {
        btnProcess('.updateCategory', 'Update Category', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchClassCategory();
       btnProcess('.updateCategory', 'Update Category', 'after')
       $('#editClassCategoryModal').modal('hide')
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.updateCategory', 'Update Category', 'after')
      })
     })


     $('#createClassCategory').on('submit', function(e) {
      e.preventDefault();
      form = $('#createClassCategory')
      category = $(form).find('input[name="category"]').val();
      if (!category) {
       littleAlert('The class category field is required', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'create_class_category',
       data: {
        category: category
       },
       beforeSend: () => {
        btnProcess('.createClassCategory', 'Add Category', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchClassCategory();
       btnProcess('.createClassCategory', 'Add Category', 'after')
       $('#createClassCategory')[0].reset()
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.createClassCategory', 'Add Category', 'after')
      })
     })
    })
   </script>


   <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTk5OWMwOTFhY2U3ZDRlZTc3YTYzMzE1MzRkN2I4NGI0ODBkZTBmZmNhYjljYjdjZjY2Y2JjZTJmZTE3NDM1ZTkxZmYyODEzYTY0ODU0NGEiLCJpYXQiOjE2OTE1NzY1NjguMTYwMDIxLCJuYmYiOjE2OTE1NzY1NjguMTYwMDI5LCJleHAiOjE3MjMxOTg5NjguMDc2NDA3LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.XwtNpSIqnRgoTmMRyqeT4c5WtFXTBCtdjJCL2HFtkU7oqa_RgMnetackgTetQsx6rfWWf40T3Fta3IfcGa_tMB2VJJBNjQUNbD_Y2QOU6eY1QH6AkEabD-l55RbKGeb2Knn-gqe0ggu-6JtdRKfgztVgRLqLiwNhR5dbUDEZhGZLmNggqYPxT97ZFWa_vvFIjj7EDaAQ0hFDWaPoXY1SN3s7vrY8OGQTCFlQmBoNRcsLZ8z6pT-Ur5aN1AOyIhAxIR4vv8ZPApBS3ABSKLBezo_v-I4iC37oCTO2hj6vkbfcBlRa_nYm-U89Dc8_q_S3iXh1h2Y6HfjWLF8DqnwFgFOySlGCj9pKh1NwQr8Kp1W0AdXdhToLiGAn57xj7n_UnCfmKgSt2skDI6FQoOY8_GPo6jrUNabFfAcKNsHkgDcH6jCI6YQrNO06aPG0Dk6zbc-RH9CHVjyqSW7gVKS36U2FhQhOeHI4uK7jncCjxG_Np-7WIJcTP5bAn8P4EAYZuxYzU0EiGZCAlXELlbsMwXUx68J_ZsFcqyoOVeOlD_1DF-mwJO59o1Dt-Awfg678t207KaRqqyFNU2MxFwcZyWh5a0VCisxuhlwljVXGsfWLVkPtRkrKIpHJXlaqQj2HeghggoitwO2qCIcSkeXAamEVZVngbHvxab0Fx1fmrxk`
      }
     });



     function fetchClassArm() {
      $.ajax({
       method: 'get',
       url: api_url + 'get_class_arm'
      }).done(function(res) {
       body = $('#arm_list_body')
       body.html(``);
       res.data.map(arm => {
        body.append(`
                            <tr>
                                <td>${arm.arm}</td>
                                <td>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-primary editArm" data-data='${JSON.stringify(arm)}'><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                            </tr>
                        `)
       })
      }).fail(function(res) {})
     }
     fetchClassArm();

     $('body').on('click', '.editArm', function() {
      data = $(this).data('data');
      modal = $('#editClassArmModal')
      modal.modal('show');
      $(modal).find('input[name="arm"]').val(data.arm)
      $(modal).find('input[name="arm_id"]').val(data.id)
      $(modal).find('.modal-title').html(`Edit Class Arm (${data.arm})`)
     });


     $('#editArmForm').on('submit', function(e) {
      e.preventDefault();

      form = $('#editArmForm');
      arm = $(form).find('input[name="arm"]').val()
      arm_id = $(form).find('input[name="arm_id"]').val()

      if (!arm) {
       littleAlert('The arm field is required', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'update_arm',
       data: {
        arm: arm,
        arm_id: arm_id,
       },
       beforeSend: () => {
        btnProcess('.updateArm', 'Update Arm', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchClassArm();
       btnProcess('.updateArm', 'Update Arm', 'after');
       $('#editClassArmModal').modal('hide');
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.updateArm', 'Update Arm', 'after');
      })
     })


     $('#createArm').on('submit', function(e) {
      e.preventDefault();
      form = $('#createArm');
      arm = $(form).find('input[name="arm"]').val()
      if (!arm) {
       littleAlert('The arm field is required', 1);
       return;
      }
      $.ajax({
       method: 'post',
       url: api_url + 'create_arm',
       data: {
        arm: arm,
       },
       beforeSend: () => {
        btnProcess('.createArm', 'Update Arm', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchClassArm();
       btnProcess('.createArm', 'Add Arm', 'after');
       form[0].reset();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.createArm', 'Add Arm', 'after');
      })
     })

    })
   </script>



  </div>

  <footer class="main-footer">
   <strong>Copyright &copy; <b>School Petal</b> </strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.5
   </div>
  </footer>


  <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/select2/js/select2.full.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/sweetalert2/sweetalert2.min.js"></script>



  <script src="https://portal.schoolpetal.com/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/jszip/jszip.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

  <script>
   $(function() {
    $('.select2').select2()
    $('.select2bs4').select2({
     theme: 'bootstrap4'
    })
   })
  </script>

  <script>
   $(function() {
    var Toast = Swal.mixin({
     toast: true,
     position: 'top-end',
     showConfirmButton: false,
     timer: 3000
    });

    function firstToast(icon = "success", message = 'Done') {
     Toast.fire({
      icon: icon,
      title: message
     });
    }
   })
  </script>
</body>

</html>