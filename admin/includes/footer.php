<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.bytosoft.com" class="font-weight-bold" target="_blank">Bytosoft</a>
                for a better web.
              </div>
            </div>
           
          </div>
        </div>
      </footer>
         

  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" href="settings.php">
      <i class="fa fa-cog py-2"> </i>
    </a>
    
     
        <!-- End Toggle Button -->
    
      <hr class="horizontal dark my-1">
    
        <!-- Sidebar Backgrounds -->
       
      
          
        
        <!-- Sidenav Type -->
        
       
       
        <!-- Navbar Fixed -->
        
       
       
       
        
     
    
  </div>
  <!--   Core JS Files   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/admin/assets/js/core/popper.min.js"></script>
  <script src="/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/admin/assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
    $(document).ready(function() {
        $(".mySummernote").summernote({
          height: 250
        });
        $('.dropdown-toggle').dropdown();
    });
</script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
 
</body>

</html>