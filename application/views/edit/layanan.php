<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div>
                <div>Layanan</div>
                <div>ss</div>
            </div>
        </div>
        <div class="col-md">
            <input placeholder="Judul Layanan" style="width: 100%"/>
            <br/>
            <textarea style="width: 100%"></textarea>
            <br/>
            simpan
            hapus
        </div>
    </div>

</div>

<script>
    function cariData() {
        // Assign handlers immediately after making the request,
        // and remember the jqxhr object for this request
        var jqxhr = $.get("localhost/", function () {
            console.log("success");
        })
                .done(function () {
                    console.log("second success");
                })
                .fail(function () {
                    console.log("error");
                })
                .always(function () {
                    console.log("finished");
                });

        // Perform other work here ...

        // Set another completion function for the request above
        jqxhr.always(function () {
            console.log("second finished");
        });
    }

    cariData();
</script>