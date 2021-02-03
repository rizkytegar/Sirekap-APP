<?php
class home extends CI_controller
{
public function index()
  {
    $this->load->view('header');
      $this->load->view('nav');
    $this->load->view('index');
    $this->load->view('footer');
  }
  public function about()
    {
      $this->load->view('header');
        $this->load->view('nav');
      $this->load->view('about');
      $this->load->view('footer');
    }

}


 ?>
