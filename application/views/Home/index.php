
  <body>
    <!--<div class="jumbotron" style="background-image: url('./asset/bg.png');">
        <div class="logo">
            <p class="display-6"><img class="img-fluid" src="./asset/icons/tooth (1).png" alt="gigi"> Chika Medika</p>
        </div>
        </div>        
    </div> -->

  <nav class="navbar navbar-dark bg-dark" style="background-image: url('./asset/bg.png');">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="invert" src="./asset/icons/tooth (1).png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
        Chika Medika
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-10">
      
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Umur</th>
              <th>Tanggal</th>
              <th>Riwayat</th>
              <th>Keluhan</th>
              <th>Resep</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              foreach($user as $u){
                echo "<tr>";
                echo "<td>$u->id_pasien</td>";
                echo "<td>$u->nama_pasien</td>";
                echo "<td>$u->umur</td>";
                echo "<td>$u->tanggal</td>";
                echo "<td>$u->riwayat</td>";
                echo "<td>$u->keluhan</td>";
                echo "<td>$u->resep</td>";
                echo "</tr>";
              }
            
            ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>
    
  </body>
</html>