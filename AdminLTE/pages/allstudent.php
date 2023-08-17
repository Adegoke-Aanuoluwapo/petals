<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="N0WfAfyEuDPxMmRpZDMvfINnKUfBBbgCPbJVI7oF">
 <title> Students
 </title>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/fontawesome-free/css/all.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/css/adminlte.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=n7P0cASCz3dCKY67MUBjJ0WAUtJ0vrjzSo093vhjqC43JHA9SVsoKv2jZuRY98ClK9FGnZL63Vsr8gyfWmR1xkHINW7eh0pwv0pzqZY-uXc" charset="UTF-8"></script>
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

<?php include("nave.php") ?>


  <div class="content-wrapper">
   <div class="littleAlert"></div>
   <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Students</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Students</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-4 offset-md-8 mb-3">
      <form action="">
       <div class="input-group input-group-">
        <input type="search" name="student" class="form-control form-control-sm" placeholder="Search Student">
        <div class="input-group-append">
         <button type="submit" class="btn btn-sm btn-default searchStudent">
          <i class="fa fa-search"></i>
         </button>
        </div>
       </div>
      </form>
     </div>
    </div>
    <div class="row" id="student_list_body">

    </div>

    <div class="row">
     <div class="col-12 pageLinks">
     </div>
    </div>
   </section>


   <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

   <!-- <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNjUyYWMzNDg4ZDNhNzJiYTJhOGMxM2E0NDYxNDk0YTBkODZkMmY3MTkxZTI1MDY5OWJkNmNmN2MyYjZkNzRkNDI4NWNkMzRlNzllNDc3NTAiLCJpYXQiOjE2OTE3MDQ5NzIuODE0MTk1LCJuYmYiOjE2OTE3MDQ5NzIuODE0MjA2LCJleHAiOjE3MjMzMjczNzIuNzg2MjQyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.CP4XGCAUPpVKLbPmNTxRDUngRqcdaJNdgxGZ-OcpOUgO8FInhRFfS6riPf3FxZ5fLGR15WJ0EUcmY47UYG29Qz-OCSs8oXo3a4Y8kmhCBWwRZl7f3RK55uiKjbBl1iEXRoSPMdAB0u6K35cQdjZXtEIjn2Tu9c6mobM2pzjQvC155bZIykEVk9-iTdqJ4VKlH1c8pPwjWWH-Qb9zwvbUd3MHFvt5MYiqXNjkmuc8Cx-8pEgma7u1ZSq3XYIU-VRWAJbvCn-UE-yjDGkyVy2wojvkSaT-ujZ2JpEgeoxgN148pmjp9RDMBtPXPuEaUfiv1h-gPU9Epia4ndO7YnL1t4ZTtiMlU2hWqWWgzLfNmWZAproPQUVjEVwV9KIIgll-3auUTknAjg6Ty7PzmYk15E529bG4BmonE-2W83BOXx9PIcTqlbvv0iZYDH_MUYHup0J-YltcxfzpCEI-ErrUv4gL0rn-QdsMcOpH9aF4004-XWwMF854fWqK1KTJ3TE-DpUbyIKrtuB48zEsN6DDyQ2nMeE0U0gULq1T61sjhlbwu2B_9NRdZws1s_hebeLSijTJHxzKiN-_nuhwnhKLxtmeA1bMfKlYIpbREG0pZ6oE_6w-NebMT7GImwDP4oAHra0QBfHv3QyWtGsj_QFDp4k_T9iRZVVZwdu4AvddGFQ`
      }
     });



     function fetchStudent() {
      page = '1'
      $.ajax({
       method: 'get',
       url: api_url + 'get_all_student?page=' + page
      }).done(function(res) {
       body = $('#student_list_body');
       body.html(``);
       res.data.data.forEach(stu => {
        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>`;
        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+stu.photo}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
       });
       $('.pageLinks').html(dropPaginatedPages(res.data.links))
      }).fail(function(res) {
       console.log(res);
      })
     }



     fetchStudent();

     $('.searchStudent').on('click', function(e) {
      e.preventDefault();

      btn = $(this)
      q = $('input[name="student"]').val();

      if (!q) {
       littleAlert('Pls add a search parameter', 1);
       return;
      }

      btn.attr('disabled', 'disabled');
      btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);

      $.ajax({
       method: 'get',
       url: api_url + 'search_student/' + q
      }).done(function(res) {
       console.log(res);
       btn.removeAttr('disabled');
       btn.html(`<i class="fa fa-search"></i>`);

       if (res.data.length == 0) {
        littleAlert(`No result found for this search <b> '${q}' </b>`, 1);
        return;
       }


       body = $('#student_list_body');
       body.html(`<div class=" col-12"><h3>Search Result for <b>'${q}'</b></h3></div>`);
       res.data.forEach(stu => {
        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>`;
        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+'assets/img/students/user.png'}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
       });


      }).fail(function(res) {
       parseError(res.responseJSON);
       btn.removeAttr('disabled');
       btn.html(`<i class="fa fa-search"></i>`);
      })
     })

    })
   </script> -->


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

  <!-- <script>
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
  </script> -->
</body>

</html>