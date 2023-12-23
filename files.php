<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbdatamahasiswa";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil semua data dari tabel datamahasiswa
$sql = "SELECT * FROM datamahasiswa";
$result = $koneksi->query($sql);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> UAS TOOL TI </title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:lightgrey">
<div class="container">
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name"> TOOL TI B</div>
      <i class='bx bx-menu' id="btn"></i></img>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index2.php #home-section">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="index2.php #search-section">
          <i class='bx bx-search-alt'></i>
          <span class="links_name">Cari Data</span>
        </a>
        <span class="tooltip">Cari Data</span>
      </li>


      <li>
        <a href="index2.php #input-section">
          <i class='bx bx-cloud-upload'></i>
          <span class="links_name">input</span>
        </a>
        <span class="tooltip">input</span>
      </li>

      <li>
        <a href="index2.php #edit-section">
          <i class='bx bx-file'></i>
          <span class="links_name">Edit Data</span>
        </a>
        <span class="tooltip">Edit Data</span>
      </li>

      <li>
        <a href="index2.php #delete-section">
          <i class='bx bx-trash'></i>
          <span class="links_name">Delete</span>
        </a>
        <span class="tooltip">Delete</span>
      </li>
 


      <li class="profile">
        <div class="profile-details">
          <img src="poto/aku.jpg" alt="profileImg">
          <div class="name_job">
            <div class="name">wiragua</div>
            <div class="job">Web designer</div>
          </div>
        </div>
        <a href="index.php"> 
        <i class='bx bx-log-out' id="log_out"></i>
</a>
      </li>

    </ul>
  </div>

  <section id="home-section">
    <div class="home-section">
      <div class="menu-item">
        <img src="poto/pngwing.com.png" class="icon"></img>
        <div class="text">
        Daftar Seluruh Data mahasiswa
</div>
</div>
<div class="result-container" stylesheet="style.css" style="top: 1100px;">
        <?php
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>No Urut</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nim"] . "</td>
                        <td>" . $row["nama"] . "</td>
                        <td>" . $row["No_urut"] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data mahasiswa.";
        }

        // Tutup koneksi ke database
        $koneksi->close();
        ?>
        <a href="index2.php">Kembali ke Beranda</a>

        <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange();
    });

    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
</div>
    
</body>

</html>