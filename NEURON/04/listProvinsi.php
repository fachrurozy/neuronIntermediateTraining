<html>
<body>
    <select name="listProvinsi" id="listProvinsi" onchange="getListKabupaten()">
        <option value="Aceh">Aceh</option>
        <option value="Jawa Barat">Jawa Barat</option>
    </select>
    <div id="listKabupaten"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //getListKabupaten();
        });

        function getListKabupaten(){
            var provinsi = $("#listProvinsi").val();
            $.ajax({
                url: "listKabupaten.php",
                data: {provinsi:provinsi},
                type: "POST",
                success: function(data){
                    console.log(data);
                    $("#listKabupaten").html(data);
                }
            })
        }
    </script>
</body>
</html>