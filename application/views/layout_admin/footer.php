            </div>
    <!-- /.container-fluid -->
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Morris Charts JavaScript <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function(){
            inicio();
        });
        function inicio()
        {
            var total=$(window).height()-50;
            //console.log(total);
            $(".side-nav").css("min-height",total+"px");
        }
    </script>
    

</body>

</html>