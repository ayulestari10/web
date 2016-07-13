<style type="text/css">
    #footer {
        background-color: #233140;
        height: 4%;
        color: white;
        padding-top: 3%;
        padding-bottom: 2%;
        margin-top: 8%;
    }
</style>
    <footer id="footer">
        <div class="container" style="text-align: center;">
            Copyright &copy; 2016 SMK Muhammadiyah 2 Palembang
        </div>
    </footer>
    <script type="text/javascript">
        var docHeight = $(window).height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
        }
    </script> 

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/js/classie.js') ?>"></script>
    <script src="<?= base_url('assets/js/cbpAnimatedHeader.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/js/freelancer.js') ?>"></script>

    </body>
</html>
