<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf">
 <title>Subscriptions
 </title>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/fontawesome-free/css/all.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/css/adminlte.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
 <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Bn468LXhoFjbY2kKQ2hzYLWmUWItQvb82-6LaprrqazmrvxiscprY4t7KT1Ytna-vDzgHapwKx8gBoz61TEqzwi8ZQtIw_NfbMeNhrvPQbg" charset="UTF-8"></script>
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


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
     <a href="#" class="nav-link"><b>SchoolPetal International School</b></a>
    </li>
   </ul>

   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" data-widget="navbar-search" href="#" role="button">
      <i class="fas fa-search"></i>
     </a>
     <div class="navbar-search-block">
      <form class="form-inline">
       <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
         </button>
         <button class="btn btn-navbar" type="button" data-widget="navbar-search">
          <i class="fas fa-times"></i>
         </button>
        </div>
       </div>
      </form>
     </div>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
      <i class="fas fa-user-alt"></i>
     </a>
    </li>
   </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

   <a href="#" class="brand-link">
    <img src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg" alt="SchoolPetal Logo" class="brand-image img-circle elevation-3" style="opacity: .5">
    <span class="brand-text font-weight-bolder">School Petal</span>
   </a>

   <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     <div class="image">

     </div>
     <img src="https://apis.schoolpetal.com/assets/img/students/user.png" class="profile_pics object-cover img-circle elevation-2   " alt="Img">

     <div class="info">
      <a href="#" class="d-block">SchoolPetal</a>
     </div>
    </div>
    <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
       <a href="/control/dashboard" class="nav-link">
        <i class="fa fa-home" aria-hidden="true"></i>
        <p>Dashboard</p>
       </a>
      </li>



      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <p>
         Manage Students
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/register_guardian" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Register Guardians</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/register_student" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Register Students</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/all_student" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Students</p>
         </a>
        </li>

       </ul>
      </li>

      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fas fa-user-plus"></i>
        <p>
         Staff Management
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/add_staff" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add New Staff</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>View All Staffs</p>
         </a>
        </li>


       </ul>
      </li>









      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fa fa-clipboard" aria-hidden="true"></i>
        <p>
         Class Management
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/category_arm" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Category/Arm</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/create_class" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Classes</p>
         </a>
        </li>
       </ul>
      </li>

      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fas fa-subscript"></i>
        <p>
         Subjects Info
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/add_subject" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Create/View Subjects</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/subject/assign" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>View Subject Teachers</p>
         </a>
        </li>


       </ul>
      </li>


      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fas fa-subscript"></i>
        <p>
         Results Mgm
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/result/check/" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Students Results</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/result/class/" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Class Result </p>
         </a>
        </li>


       </ul>
      </li>



      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fas fa-toolbox"> </i>
        <p>
         School Settings
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/setting/result" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Results Settings</p>
         </a>
        </li>
        <li class="nav-item">
         <a href="/control/setting/permission" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Permission Setup</p>
         </a>
        </li>
        <li class="nav-item">
         <a href="/control/setting/general" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>General Setup</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/setting/sub/10" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Registration Slots</p>
         </a>
        </li>

       </ul>
      </li>



      <li class="nav-item">
       <a href="/control/managepromotion" class="nav-link">
        <i class="fas fa-scroll    "></i>
        <p>Manage Promotions</p>
       </a>
      </li>




      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fas fa-money-bill-wave-alt"></i>
        <p>
         School Fees Control
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/fee" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Create Fee Category</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/set_fee" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Set School Fee</p>
         </a>
        </li>


       </ul>
      </li>

      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fa fa-sticky-note" aria-hidden="true"></i>
        <p>
         Levy Payment Report
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/fee/daily" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Daily Payments</p>
         </a>
        </li>
        <li class="nav-item">
         <a href="/control/fee/weekly" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Weekly Payments</p>
         </a>
        </li>
        <li class="nav-item">
         <a href="/control/fee/termly" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Termly Payments</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/fee/range" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Fee Across Date Range</p>
         </a>
        </li>
       </ul>
      </li>


      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fa fa-book" aria-hidden="true"></i>
        <p>
         Student Result
         <i class="fas fa-angle-left right"></i>
        </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="/control/result/upload/" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Upload Result</p>
         </a>
        </li>

        <li class="nav-item">
         <a href="/control/broad-sheet" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>View Broad Sheet</p>
         </a>
        </li>


       </ul>
      </li>




      <li class="nav-item">
       <a href="#" class="nav-link">
        <i class="fa fa-user" aria-hidden="true"></i>
        <p>My Profile</p>
       </a>
      </li>


      <li class="nav-item">
       <a href="/logout" onclick="return confirm('Are you sure you want to log out')" class="nav-link">
        <i class="fa fa-power-off" aria-hidden="true"></i>
        <p>Log Out</p>
       </a>
      </li>

     </ul>
    </nav>
   </div>
  </aside>


  <div class="content-wrapper">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Subscriptions</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Subscriptions</li>
       </ol>
      </div>
     </div>
    </div>
   </div>



   <section class="content">
    <div class="row">
     <div class="col-lg-6 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title n">
         <i class="fas fa-plus-square"></i>
         Link Livepetal Wallet
        </h3>
       </div>
       <div class="card-body">
        <form action="" id="linkWallet" class="row">
         <div class="col-md-12 form-group text-warning">
          <b>Note:</b> You have to link your livpetal wallet before you can perform transactions
         </div>
         <div class="col-md-6 form-group">
          <input type="text" name="liveid" class="form-control" placeholder="Live Petal ID">
         </div>
         <div class="col-md-6 form-group">
          <input type="" autocomplete="off" autofill="close" name="pwd" class="form-control" placeholder="Live Petal Password">
         </div>
         <div class="form-group col-12 mb-0 ">
          <span><b>Current Wallet: <span class="currentwallet"></span></b></span>
          <button type="submit" class="btn btn-secondary float-right linkWallet">Link Wallet</button>
         </div>
        </form>
       </div>
      </div>

      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         Recently Linked Wallets
        </h3>
       </div>
       <div class="table-responsive">
        <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
         <thead>
          <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
          </tr>
         </thead>
         <tbody id="wallets_linked">


         </tbody>
        </table>
       </div>

      </div>

     </div>


     <div class="col-lg-6 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title">
         <i class="fas fa-plus-square"></i>
         Purchased Registration Slots
        </h3>
       </div>
       <div class="card-body">
        <div class="d-flex justify-content-between">
         <span><b>Total</b>: <span class="total_slot">0</span></span>
         <span><b>Used</b>: <span class="used_slot">0</span></span>
         <span><b>Availabe</b>: <span class="slots_av">0</span></span>
        </div>
        <br>

        <form action="" id="slotPurchase" class="row">
         <div class="col-md-6 form-group">
          <input type="number" name="slots" min="1" class="form-control" placeholder="Number to purchase">
         </div>
         <div class="col-md-6 form-group">
          <select name="pack" class="form-control">
           <option value=1>Basic | ₦ 500 / Student </option>
          </select>
         </div>
         <div class="form-group col-12 mb-0 ">
          <span><b>Wallet Balance: <span class="walletbalance">0</span></b></span>
          <button type="submit" class="btn btn-secondary slotPurchase float-right" style="margin-right: 10px">Pay With Livepetal</button>
         </div>
        </form>
       </div>
      </div>

      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         Slot Purchase History
        </h3>
       </div>
       <div class="table-responsive">
        <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
         <thead>
          <tr>
           <th>Slots</th>
           <th>Amount</th>
           <th>Date</th>
           <th>By</th>
          </tr>
         </thead>
         <tbody id="slots_history">


         </tbody>
        </table>
       </div>

      </div>

     </div>
    </div>
   </section>


   <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

   <script>
    $(function() {

     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU2MzQ1MGQyMGY1ODlmMTcxNGFkNTkyNTUxOGM5ZjlmMTcyNmQyNzc1MGVjMjI0ZDAwOWQ5NjZlMjViZTAyZDM1ZTc2ODI4MDA3YTIzN2QiLCJpYXQiOjE2OTIwODQ4NDAuNDAxMjY4LCJuYmYiOjE2OTIwODQ4NDAuNDAxMjc3LCJleHAiOjE3MjM3MDcyNDAuMzU4MDcyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.lCs_mz-Qn3RUZeHSaQ7z8ajONGMdyQtvtsPgEE4vpSgJafBGOnUBA2PJq2575LD-PIUL2yUqtA7F2ERuZdLfmTljSdahTpWFa-yZsez1fE_3sIuTHM3qNDFuurbWN4-7JMy6yZIHkK8hINmcqlozU4r5FyCjvOO-cLY6rc9JGwdf8iuYavE2ewGRFoJgT0bkbz1ZmP50AlmLNw5DPbfrEPlgJeqpGj-0YQ-KokbHPzIheAFBKaAPZekvpTsPb0rZxtnSQGM-ND5Xzdlv04m4Uw186f3AwPtTke3g9reeWO2iXrGkyS6LvqP8xqbqMl0XBYZRPfKq8HZi0nzFgDFrT_1J9VipAlko7eto8zaP_S_Q_HtPWXwFuS_PnLFAiWHsbLaPnmsB_WX894MllDZeYO8C8b15ip_fSn1wrzQbC4vuzGeQFjQy81K938qrk-2VxDyUKLkg3p6Oag9hgkA5JW9Dok9MjKHFoCgPlWaLgrqavSX2yqZbB8k5sTsmpjBtM0DqFgaNOV9LezwZVeeucrRfYkAyLjux4NPWbn7KMeertrYGoi82muiwGYMb6oRWFbbaZUCqu3hbTCo9_0Dod3Etd-XACyfElDGWL9mUa2GoYx9IbaDLoDcZ33M9Jn2pG1F41tNM1Pw_M-Jhm9pnSF2-fa9jxrtzPHYeiKasMz0`,
      }
     });


     $('#linkWallet').on('submit', function(e) {
      e.preventDefault()
      form = $(this)

      liveid = $(form).find('input[name="liveid"]').val();
      password = $(form).find('input[name="pwd"]').val();


      $.ajax({
       method: 'post',
       url: api_url + 'link/wallet',
       data: {
        id: liveid,
        password: password
       },
       beforeSend: () => {
        btnProcess('.linkWallet', '', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.linkWallet', 'Link Wallet', 'after')
       fetchLinkedWallets();
       form[0].reset();
       walletBalance();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.linkWallet', 'Link Wallet', 'after')
      })
     })


     function slotBalance() {
      $.ajax({
       method: 'get',
       url: api_url + 'available_slots'
      }).done(function(res) {
       $('.total_slot').html(res.total)
       $('.used_slot').html(res.used)
       $('.slots_av').html(res.available)
      }).fail(function(res) {})
     }

     slotBalance();





     function fetchLinkedWallets() {
      $.ajax({
       method: 'get',
       url: api_url + 'linked_wallet'
      }).done(function(res) {
       body = $('#wallets_linked');
       body.html('')
       res.data.map(wal => {
        body.append(`
                            <tr>
                                <td>${wal.live_id}</td>
                                <td>${wal.name}</td>
                                <td>${wal.email}</td>
                                <td>${wal.phone}</td>
                            </tr>
                       `)
       })
      }).fail(function(res) {})
     }


     fetchLinkedWallets();


     function slotsPurchaseHistory() {
      $.ajax({
       method: 'post',
       url: api_url + 'slot/history'
      }).done(function(res) {
       console.log(res);
       body = $('#slots_history')
       body.html(``);
       res.data.map(slt => {
        body.append(`
                            <tr>
                                <td>${slt.slots}</td>
                                <td>${moneyFormat(slt.amount)}</td>
                                <td>${formatDate(slt.created_at)}</td>
                                <td>${slt.user.name}</td>
                            </tr>
                        `)
       })
      }).fail(function(res) {
       console.log(res);
      })
     }

     slotsPurchaseHistory();

     function walletBalance() {
      $.ajax({
       method: 'get',
       url: api_url + 'wallet_balance'
      }).done(function(res) {

       $('.walletbalance').html(moneyFormat(res.balance))
       $('.currentwallet').html(`${res.id} (${res.name})`)
      }).fail(function(res) {})
     }

     walletBalance();


     $('#slotPurchase').on('submit', function(e) {
      e.preventDefault();
      form = $(this);
      slots = $(form).find('input[name="slots"]').val();
      pack = $(form).find('select[name="pack"]').val();
      term_id = `10`
      if (!slots || slots <= 0) {
       littleAlert('The slots field is required', 1);
       return;
      }
      $.ajax({
       method: 'post',
       url: api_url + 'purchase_slot',
       data: {
        slots: slots,
        pack: pack,
        term_id: term_id,
       },
       beforeSend: () => {
        btnProcess('.slotPurchase', '', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.slotPurchase', 'Pay With Livepetal', 'after')
       slotsPurchaseHistory();
       slotBalance();
       walletBalance();

       form[0].reset();

       if (res.type == 3) {
        console.log(res.term);
        $.ajax({
         method: 'post',
         url: '/reput_term',
         data: {
          '_token': `Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf`,
          term: JSON.stringify(res.term)
         },
        }).done(function(res) {
         console.log(res);
         littleAlert('Current term Updated sucessfully');
         setTimeout(() => {
          location.href = "/control/dashboard"
         }, 3000);
        }).fail(function(res) {
         console.log(res);
        })
       }
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.slotPurchase', 'Pay With Livepetal', 'after')
       console.log(res);
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