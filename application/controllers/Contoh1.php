<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {
	public function index()
	{
		echo "<h1>Perkenalkan</h1>";
        echo "
            <p>
                Nama saya Mohammad Rafa Adila <br>
                Saya tinggal di Jakarta Pusat <br>
                Olahraga yang saya sukai adalah Sepakbola
            </p>
        ";
	}
}
