	
        
        <footer id="footer" class="container">
            <div id="footer-info" class="clearfix">
                <div id="footer-1" class="col">

                </div>

                <div id="footer-2">

                </div>

                <div id="footer-3">

                </div>

                <div id="footer-4">

                </div>
            </div>
            
            <div id="footer-socical">
                <ul>
                    <li></li>
                </ul>
            </div>
        </footer>
    </body>
    <!-- Chèn link JavaScript-->
    <script src="<?php echo ASSETS ?>js/jquery.min.js" type="text/javascript"></script>

    <script src="<?php echo ASSETS ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
	  	// Active menu	
        $(function() {
            var pgurl = window.location.href.substr( window.location.href.lastIndexOf("/") + 1 );
            $("#nav1 li a").each(function(){
                var href = $(this).attr("href");
                var ctr = href.substr( href.lastIndexOf("/") + 1 ) ;
                if(ctr == pgurl || ctr == '' ) 
                    $(this).parent().addClass("on");
            });
        });
    </script>
    
    <script type="text/javascript">
        var URL = "<?php echo URL ?>";
    </script>

    <?php
        // Include script module
        if(isset($this->script)){
            foreach ($this->script as $script) {
                echo '<script type="text/javascript" src="'. $script .'" ></script>';
            }
        }
    ?>
</html>