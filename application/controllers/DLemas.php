<?php 
class DLemas extends CI_Controller { 
    public function index() { 
        $this->load->view('Form_DLemas'); 
    } 
    public function cetak() {
        $data = [ 
            'NM' => $this->input->post('NM'), 
            'NIS' => $this->input->post('NIS'), 
            'Kelas' => $this->input->post('Kelas'),
            'Tgl_Lahir' => $this->input->post('Tgl_Lahir'),
            'Tmpt_Lahir' => $this->input->post('Tmpt_Lahir'),
            'Alamat' => $this->input->post('Alamat'),
            'J_Kelamin' => $this->input->post('J_Kelamin'),
            'Agama' => $this->input->post('Agama'), 
        ]; 
        $this->load->view('Data_DLemas', $data); 
    } 
} 