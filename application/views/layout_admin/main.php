<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('layout_admin/head');?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php $this->load->view('layout_admin/sidebar');?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
          <?php $this->load->view('layout_admin/navbar');?>
        <!-- Topbar -->
        
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <?php $this->load->view($page);?>
        </div>
        <!-- Container Fluid-->

      <!-- Footer -->
        <?php $this->load->view('layout_admin/footer');?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
    <?php $this->load->view('layout_admin/scrolltop');?>
  <!-- Scroll to top -->

  <!-- load js -->
    <?php $this->load->view('layout_admin/js');?>
  <!-- load js -->
  
</body>

</html>