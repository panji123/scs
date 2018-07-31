
<script>
    var menuKlik = false;
    function myFunction(x) {
        $("#navigasi").css("display", "block");
        if (x.matches) { // If media query matches
            if (!menuKlik) {
                $("#navigasi").css("display", "none");
            }
        } else {

        }
    }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
    function toggeMenu() {
        alert('click');
        if (menuKlik) {
            menuKlik = false;
        } else {
            menuKlik = true;
        }
        $("#navigasi").css("display", "block");
        if (!menuKlik) {
            $("#navigasi").css("display", "none");
        }
    }
    $("#menu").click(function () {

        if (menuKlik) {
            menuKlik = false;
        } else {
            menuKlik = true;
        }
        $("#navigasi").css("display", "block");
        if (!menuKlik) {
            $("#navigasi").css("display", "none");
        }

    });
</script>



<div id="footer" class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            Semesta Citra Sertivindo
            <br/>
            <br/>

            <br/>
            <br/>
            Alamat
            <hr/>
            Jl. Ahmad Adnawijaya C1 No. 8 <br/> Kota Bogor.
            <br/>
            <br/>

        </div>
        <div class="col-md-4">
            <br/>
            <br/>
            Phone:
            <hr/> 62
            -
            251
            -
            8574425;
            <br/>
            <br/>

            Faximile :
            <hr/>
            62
            -
            251
            -
            8380051;

            <br/>
            <br/>
        </div>
        <div class="col-md-4">
            <br/>
            <br/>
            Email : <hr/>
            SCS
            ertivindo@gmail.com

        </div>
    </div>

</div>


</body>
</html>
