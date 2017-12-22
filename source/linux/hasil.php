<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Thousand Sunny Course</title>
      <link rel="stylesheet" href="../../css/sunny.css">
    </head>
  <body>

  <!-- Mulai Header -->
  <div class="header-image">
      <div class="header-text">
        <h1 style="font-size:50px">Sunny Course</h1>
        <p>Web Kursus Online</p>
      </div>
    </div>

    <!-- Menu Navbar -->
    <div class="topnav">
    <a href="../../index.php">Beranda</a>

    </div>
    <!-- END Navbar -->

    <!-- MULAI CONTENT -->
    <div class="row">
            <div class="column left">
                <div class="map">
                        <h3>Materi Kursus Linux</h3>
                        <div class="vertical-menu">
                            <a href="linux1.html">Pengenalan</a>
                            <a href="linux2.html">Perintah Dasar</a>
                            <a href="linux3.html">Perintah Lanjut</a>
                            <a href="tes.html">Test</a>
                            <a class="active">Hasil Quiz</a>
                        </div>
                </div>
                  
            </div>
            
            <div class="column right">
              <div class="post">
              <h2 style="margin:17px 10px 10px 10px; text-align:center;">HASIL QUIZ LINUX</h2>
              <!-- PHP Grade -->
                <?php
                    
                    $answer1 = $_POST['1'];
                    $answer2 = $_POST['2'];
                    $answer3 = $_POST['3'];
                
                    $totalCorrect = 0;
                    
                    if ($answer1 == "A") { $totalCorrect++; }
                    if ($answer2 == "C") { $totalCorrect++; }
                    if ($answer3 == "B") { $totalCorrect++; }
                    { $totalCorrect++; }
                    
                    echo "<h3>$totalCorrect / 3 Jawaban Benar<h3>";
                    
                ?>
	
	            </div>  
              </div>  
            </div>
          </div>

    <!-- Mulai Footer -->
    <div class="footer">
      <p style="color:white">Footer - Copyright Thousand Sunny 2017 </p>
    </div>
  </body>
</html>
