
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
        <a href="#home-section">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="#search-section">
          <i class='bx bx-search-alt'></i>
          <span class="links_name">Cari Data</span>
        </a>
        <span class="tooltip">Cari Data</span>
      </li>


      <li>
        <a href="#input-section">
          <i class='bx bx-cloud-upload'></i>
          <span class="links_name">input</span>
        </a>
        <span class="tooltip">input</span>
      </li>

      <li>
        <a href="#edit-section">
          <i class='bx bx-file'></i>
          <span class="links_name">Edit Data</span>
        </a>
        <span class="tooltip">Edit Data</span>
      </li>

      <li>
        <a href="#delete-section">
          <i class='bx bx-trash'></i>
          <span class="links_name">Delete</span>
        </a>
        <span class="tooltip">Delete</span>
      </li>
      

      <li class="profile">
        <div class="profile-details">
          <img src="poto/aku.jpg" alt="profileImg">
          <div class="name_job">
            <div class="name">wiraguna</div>
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
          DATA MAHASISWA TOOL TI B
        </div>
      </div>
      <h1 style="padding:10px; padding-bottom:5px;"> TOOL TI B </h1>
      <p style="padding:10px;">Website Informasi data mahasiswwa mata kuliah tool ti B merupakan website yang dapat melakukan meng-input, mencari, mengedit, menhapus data mahhasiswa</p>
      <div class="box-container" >
        <div class="box-item">
            <div class="card-title">Total Mahasiswa</div>
<?php
    include 'koneksi.php';
            $query = "SELECT COUNT(*) AS total_data FROM datamahasiswa";
$result = $koneksi->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    
    echo "Jumlah data: " . $row['total_data'];
} else {
    echo "Error: " . $conn->error;
}

$koneksi->close();
?>
        </div>
        <div class="box-item">
            <div class="card-title">Mencari cari Mahasiswa
            <form action="#search-section" method="post">
        <input type="submit" value="Masuk"></input></from></form>
        </div>
</div>


        <div class="box-item">
            <div class="card-title">Hapus Mahasiswa
            <form action="#delete-section" method="post">
        <input type="submit" value="Masuk">
      </input> </form></form>
</div>
        </div>
        <div class="box-item">
            <div class="card-text">Data Seluruh Mahasiswa 
            <form action="files.php" method="post">
        <input type="submit" value="Lihat Data"></input>
        </from></form>
            </div>
          </div>
</div>
</div>


  </section>


  <section id="search-section">
    <div class="home-section">
      <div class="menu-item">
        <img src="poto/pngwing.com.png" class="icon"></img>
        <div class="text">
          CARI DATA MAHASISWA
        </div>
      </div>
      <div class="background-slider"></div>
      <div class="form-container">
      <form action="search.php" method="post" onsubmit="return validateForm()">

        <label for="search">NIM atau Nama:</label>
        <input type="text" id="search" name="search" placeholder="Masukkan NIM atau Nama">
        <input type="submit" value="Cari">
        <script>
        function validateForm() {
        var searchInput = document.getElementById('search').value;

        if (searchInput.trim() === '') {
            alert('Mohon masukkan NIM atau Nama sebelum melakukan pencarian.');
            return false;
        }

        return true; 
        }
      </script>
      </form></form>
    </div>
  </div>
  </section>


  <section id="input-section">
    <div class="home-section" id="home-section">
      <div class="menu-item">
        <img src="poto/pngwing.com.png" class="icon"></img>
        <div class="text">
          INPUT DATA MAHASISWA
        </div>
      </div>
    <div class="form-container">
      <form action="input.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="no_urut">No Urut:</label>
        <input type="number" id="no_urut" name="no_urut" required>
        <input type="submit" value="Tambah Data">
      </form></from>
    </div>
  </div>

  </section>


  <section id="delete-section">
    <div class="home-section">
      <div class="menu-item">
        <img src="poto/pngwing.com.png" class="icon"></img>
        <div class="text">
          HAPUS DATA MAHASISWA
        </div>
      </div>
      <div class="form-container">
      <form action="delete.php" method="post">
        <label for="delete_id">ID Data:</label>
        <input type="number" id="delete_id" name="delete_id" required>

        <input type="submit" value="Hapus Data">
      </form>
    </div>
  </div>
  </section>

  <section id="edit-section">
    <div class="home-section">
      <div class="menu-item">
        <img src="poto/pngwing.com.png" class="icon"></img>
        <div class="text">
          EDIT DATA MAHASISWA
        </div>
      </div>
  <div class="form-container">
      <form action="edit.php" method="post">
        <label for="edit_id">ID Data:</label>
        <input type="number" id="edit_id" name="edit_id" required>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="no_urut">No Urut:</label>
        <input type="number" id="no_urut" name="no_urut" required>
        <input type="submit" value="Edit Data">
      </form>
    </div>
  </div>
  </section>
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