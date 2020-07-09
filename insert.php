<script>
    $(document).ready(function(){
		 $("#div_refresh").load("/inside/load.php");
        setInterval(function() {
            $("#div_refresh").load("/inside/load.php");
        }, 5000);
    });
</script>
