<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 
class Web extends CI_Controller{ 
    function __construct(){ 
        parent::__construct(); 
    } 
    public function index(){ 
        $data['judul'] = "Halaman Depan"; 
        $this->load->view('Header',$data); 
        $this->load->view('Index',$data); 
        $this->load->view('Footer',$data); 
    } 
    public function about() 
    { 
        $data['judul'] = "Halaman About"; 
        $this->load->view('Header', $data); 
        $this->load->view('About', $data); 
        $this->load->view('Footer', $data); 
    } 
 
} 