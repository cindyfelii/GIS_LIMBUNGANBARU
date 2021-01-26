<?php
class home extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function banjir()
    {
        $this->load->view('banjir');
    }

    public function contact()
    {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function drainase()
    {
        $this->load->view('drainase');
    }

    public function listing()
    {
        $this->load->view('header');
        $this->load->view('listing');
        $this->load->view('footer');
    }

    public function tersumbat()
    {
        $this->load->view('tersumbat');
    }

    public function ampera()
    {
        $this->load->view('ampera');
    }

    public function harapan()
    {
        $this->load->view('harapan');
    }

    public function harmonis()
    {
        $this->load->view('harmonis');
    }

    public function pembangunan()
    {
        $this->load->view('pembangunan');
    }

    public function sekolah()
    {
        $this->load->view('sekolah');
    }
}
