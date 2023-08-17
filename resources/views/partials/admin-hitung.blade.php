<script>
    $(".hitung").keyup(function() {
        total();
    });

    $(".hitung").change(function() {
        total();
    });

    function total() {
        var up  = $("#up").val();
        var am  = $("#am").val();
        var tot = (up * am);

        $("#total").val(tot);

        var ds      = $("#ds").val();
        var ppn     = $("#ppn").val();
        var fix_tot = tot - (tot * (ds/100));
        var dpp     = Number(fix_tot + (fix_tot * ppn / 100)).toFixed(2);

        $("#dpp").val(dpp);
    }
</script>
