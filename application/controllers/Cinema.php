<?php
class Cinema extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-cinema');
    }
    public function cetak()
    {
        $data = [
        'name' => $this->input->post('name'),
        'film' => $this->input->post('film'),
        'pukul' => $this->input->post('pukul'),
        'tipe' => $this->input->post('tipe'),
        'pesan' => $this->input->post('pesan')
 
        ];
        $this->load->view('view-output-cinema', $data);
    }
}