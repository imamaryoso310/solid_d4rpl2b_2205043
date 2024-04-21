<?php

require_once 'mahasiswa.php';
require_once 'mahasiswaview.php';

$mahasiswa = new Mahasiswa("2205043", "Imam Aryoso");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);
