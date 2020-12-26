<!-- collapse sidebar js -->
<script>
    function toggle(){
        currentvalue = document.getElementById('toggle').value;
        if(currentvalue == "close"){
            close_sidebar();
            document.getElementById("toggle").value="open";
        }else{
            open_sidebar();
            document.getElementById("toggle").value="close";
        }
    }

    function close_sidebar() {
        document.getElementById("content").style.marginLeft = "0px";
        document.getElementById("content").style.width = "100%";
        document.getElementById("navbar").style.marginLeft = "0px";
        document.getElementById("navbar").style.width = "100%";
        document.getElementById("sidebar").style.position = "stiky";
        document.getElementById("sidebar").style.marginLeft = "-230px";
        // document.getElementById("close-sidebar").style.display = "none";
        // document.getElementById("open-sidebar").style.display = "block";
    }

    function open_sidebar() {
        document.getElementById("content").style.marginLeft = "230px";
        document.getElementById("content").style.width = "calc(100% - 230px)";
        document.getElementById("navbar").style.marginLeft = "230px";
        document.getElementById("navbar").style.width = "calc(100% - 230px)";
        document.getElementById("sidebar").style.position = "fixed";
        document.getElementById("sidebar").style.marginLeft = "0px";
        // document.getElementById("close-sidebar").style.display = "block";
        // document.getElementById("open-sidebar").style.display = "none";
    }
</script>

<!-- toggle filter js -->
<script>
    function toggle_filter(){
        currentvalue = document.getElementById('toggle-filter').value;
        if(currentvalue == "close"){
            close_filter();
            document.getElementById("toggle-filter").value="open";
        }else{
            open_filter();
            document.getElementById("toggle-filter").value="close";
        }
    }

    function close_filter() {
        document.getElementById("filter").style.display = "block";
    }

    function open_filter() {
        document.getElementById("filter").style.display = "none";
    }
</script>
<script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById("filter").style.display = "block";
            document.getElementById("toggle-filter").style.display = "none";
            document.getElementById("toggle-filter").value = "open";
        } else {
            document.getElementById("filter").style.display = "none";
            document.getElementById("toggle-filter").style.display = "block";
            document.getElementById("toggle-filter").value = "close";
        }
    }

    var x = window.matchMedia("(min-width: 992px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>

<!-- thumbnail gambar -->
<script>
    function preview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_preview')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- custom file input label -->
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>  

<!-- close notif js -->
<script>
    function notif_close() {
        document.getElementById("notif").style.display = "none";
    }
</script>

<!-- multiple add table js -->
<script>
    $(document).ready(function(){
        var count = 1;
        $('#add').click(function(){
            count = count + 1;
            var html_code = "<tr id='row"+count+"'>";
                html_code += "<td class='align-middle'><i class='fas fa-receipt'></i></td>";
                html_code += "<td><input type='text' name='nama_item' id='nama_item' class='form-control'></td>";
                html_code += "<td><input type='number' name='jumlah_beli' id='jumlah_beli' class='form-control'></td>";
                html_code += "<td><input type='number' name='harga_satuan' id='harga_satuan' class='form-control'></td>";
                html_code += "<td><input type='text' name='total_harga' id='total_harga' class='form-control' disabled></td>";
                html_code += "<td class='text-right'><a name='remove' data-row='row"+count+"' class='btn btn-danger remove'><i class='fas fa-minus'></i></a></td></td>";
            html_code += "</tr>";
            $('#crud_table').append(html_code);
        });
        $(document).on('click', '.remove', function(){
            var delete_row =  $(this).data("row");
            $('#' + delete_row).remove();
        });
    });
</script>