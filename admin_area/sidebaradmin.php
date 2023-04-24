<nav class="navbar navbar-inverse navbar-fixed-top color"> 
    <div class="navbar-header"> <!--awal navbar-header-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <!--Awal Navbar Toggle-->
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> <!--Akhir Navbar Toggle-->
        <a href="index.php?dashboard" class="navbar-brand">Yayasan Pendidikan Islam Ibnu Halim</a>
    </div> <!--akhir navbar-header-->
    <ul class="nav navbar-right top-nav"> <!--awal nav navbar right top-nav-->
        <li class="dropdown"> <!--awal Dropdown -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Admin
                <i class="fa fa-user"><b class="caret"></b></i>
            </a>
            <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i>Logout
                    </a>
                </li>
            </ul>
        </li> <!--akhir Dropdown -->
    </ul> <!--akhir nav navbar right top-nav-->

    <div class="collapse navbar-collapse navbar-ex1-collapse"> <!--awal collapse navbar-collapse navbar-ex1-collapse -->
        <ul class="nav navbar-bar side-nav"> <!-- Awal Nav sidebar -->
            <li>
                <a href="index.php?dashboard"> 
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#guru"><!-- a href begin -->
                        
                        <i class="fa-solid fa-chalkboard-user"></i> Data Guru
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="guru" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_guru"> Tambah Data Guru </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_guru"> Lihat Data Guru </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#kepsek"><!-- a href begin -->
                        
                        <i class="fa-solid fa-person"></i> Data Kepala Sekolah
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="kepsek" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_kepsek"> Tambah Data </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_kepsek"> Lihat Data </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#siswa"><!-- a href begin -->
                        
                        <i class="fa-solid fa-graduation-cap"></i> Data Siswa
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="siswa" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_siswa"> Tambah Data Siswa </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_siswa"> Lihat Data Siswa </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#kelas"><!-- a href begin -->
                        
                        <i class="fa-solid fa-school"></i> Data Kelas
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="kelas" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_kelas"> Tambah Data Kelas </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_kelas"> Lihat Data Kelas </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#mapel"><!-- a href begin -->
                        
                        <i class="fa-solid fa-school"></i> Data Mata Pelajaran
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="mapel" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_mapel"> Tambah Mata Pelajaran </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_mapel"> Lihat Mata Pelajaran </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#ekskul"><!-- a href begin -->
                        
                        <i class="fa-solid fa-chalkboard"></i> Data Ekstrakulikuler
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="ekskul" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_ekskul"> Tambah Data Ekskul </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_ekskul"> Lihat Data Ekskul </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#kegiatan"><!-- a href begin -->
                        
                        <i class="fa-solid fa-wave-pulse"></i> Data Kegiatan
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="kegiatan" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_kegiatan"> Tambah Data Kegiatan </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_kegiatan"> Lihat Data Kegiatan </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#pengumuman"><!-- a href begin -->
                        
                        <i class="fa-solid fa-megaphone"></i> Data Pengumuman
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="pengumuman" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_pengumuman"> Tambah Data Pengumuman </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_pengumuman"> Lihat Data Pengumuman </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
        </ul> <!-- Akhir Nav sidebar -->
    </div>

</nav>