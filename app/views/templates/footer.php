
    </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=BASEURL;?>/js/jquery.js"></script></body>
    <script>
        $(document).ready(function () {
            $("#supplierchange").change(function () { 
                // console.log($(this).val());
                let id_supplier = $(this).val();                
                $.ajax({
                    type: "POST",
                    url: "<?=BASEURL;?>/transactions/fetch",
                    data: {
                        id_supplier : id_supplier
                    },
                    success: function (response) {
                        $("#qty_press").attr('value','');
                        $("#total_result").attr('value','');
                        $("#nama_barang_dynamic").html(response);
                    }
                });
            });

            $("#nama_barang_dynamic").change(function () { 
                let item = $(this).val();
                $("#qty_press").attr('value','');
                
                $.ajax({
                    type: "POST",
                    url: "<?=BASEURL;?>/transactions/fetchHarga",
                    data: {
                        item : item
                    },
                    success: function (response) {
                        $("#total_result").attr('value','');
                        $("#qty_press").attr('value','');
                        $("#qty_press").on('keyup change',function (e) { 
                            let qty = $(this).val();
                            
                            $("#total_result").attr('value','');
                            $("#total_result").attr('value', qty * parseInt(response));
                        });
                    }
                });
            });
            
            
        });
        
    </script>
<script type="text/javascript" src="<?=BASEURL;?>/js/script.js"></script></body>
<script type="text/javascript" src="<?=BASEURL;?>/frontend/scripts/main.js"></script></body>
</html>
