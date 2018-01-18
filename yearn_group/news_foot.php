    <div class="foot">
        Copyright ? 2017 yearnedu.com Inc. All Rights Reserved. 郑州育人教育集团备案/许可证编号： 豫ICP备16026588号
    </div>
</body>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<script>
    function toggleNav() {
        $("#nav-toggle").toggleClass(" toggle-animate");
        $("body").toggleClass("open-nav");
    }
    $("#nav-toggle,#mask-layer").on("click", function () {
        toggleNav();
    });

    $(document).ready(function () {
        var w = document.body.clientWidth;
        if (w < 840) {
            $('.head-con').removeClass('head-con-two');
        } else {
            $('.head-con').addClass('head-con-two');
        }
    });
    $(function(){
		let clientW = $(window).width()  
		if(clientW < 840){
			$(".down").click(function() {
				$(this).next().toggle("1000");
			})
		}
	})
</script>

</html>