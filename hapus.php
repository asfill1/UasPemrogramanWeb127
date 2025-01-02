<?php

session_start();

require_once "function.php";


if (isset($_GET["id_menu"])) $hapus = hapus_data_menu();

else $hapus = hapus_data_pesanan();

echo $hapus > 0

? "<script>

    alert('Data berhasil dihapus!');

    location.href = 'index.php';

</script>" 

:"<script>

    alert('Data gagal dihapus!');

    location.href = 'index.php';

</script>";