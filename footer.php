<script>
        $(".close_open.btn_close").click(function(){
  $(".nav-bar").addClass("close");
});

$(".close_open.btn_open").click(function(){
  $(".nav-bar").removeClass("close");
});
</script>
<script>
        $(".close_open.btn_close").click(function(){
  $(".close_open.btn_open").addClass("active");
  $(".close_open.btn_close").removeClass("active");
});

$(".close_open.btn_open").click(function(){
  $(".close_open.btn_close").addClass("active");
  $(".close_open.btn_open").removeClass("active");
});
</script>
</body>
</html>