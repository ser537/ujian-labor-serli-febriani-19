<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<select id="karyawan" name="id_karyawan">
    <option value="">--Pilih--</option>
</select>

<script>
$("#karyawan").change(function(){
    var id = $(this).val();
    $.get("ajax.php?id="+id,function(data){
        var obj = JSON.parse(data);

        var bpjs = obj.gaji_pokok * 0.04;
        var tunjangan_anak = obj.gaji_pokok * 0.10 * obj.jumlah_anak;

        var total = (parseInt(obj.gaji_pokok) 
                    + parseInt(obj.tunjangan_jabatan) 
                    + tunjangan_anak) - bpjs;

        console.log(total);
    });
});
</script>