<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{
   function __construct()
   {
       parent::__construct();
       $this->load->model('m_data');
   }

   function index()
   {
       $data['user'] = $this->m_data->tampil_data()->result();
       $this->load->view('v_tampil',$data);
   }
}