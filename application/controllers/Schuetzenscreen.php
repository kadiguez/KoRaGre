<?php
class Schuetzenscreen extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('schuetzenscreen_model');
            $this->load->helper('url_helper');
        }
    
        public function index()
        {
            $data['Verein'] = $this->schuetzenscreen_model->get_verein(); //Tabelle
            $data['Vereinsname'] = 'Registrierte Vereine'; //Spalte

            $this->load->view('templates/header', $data);
            $this->load->view('schuetzenscreen/index', $data);
            $this->load->view('templates/footer');
        }
    
        public function view()
        {            
            $data['verein_item'] = $this->schuetzenscreen_model->get_verein();

            if (empty($data['verein_item']))
            {
                show_404();
            }
            
            $data['Vereinsname'] = $data['verein_item']['Vereinsname'];

            $this->load->view('templates/header', $data);
            $this->load->view('schuetzenscreen/view', $data);
            $this->load->view('templates/footer');
        }
    
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Einen neuen Verein erstellen';

            $this->form_validation->set_rules('vereinsname', 'Vereinsname', 'required'); //name of input field, name used in error messages, rule
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('passwort', 'Passwort', 'required');
            $this->form_validation->set_rules('email', 'E-Mail', 'required');
            $this->form_validation->set_rules('telefon', 'Telefon', 'required');
            $this->form_validation->set_rules('strasse', 'Strasse', 'required');
            $this->form_validation->set_rules('plz', 'PLZ', 'required');
            $this->form_validation->set_rules('ort', 'Ort', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('vorname', 'Vorname', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('schuetzenscreen/create');
                $this->load->view('templates/footer');
            }
        
            else
            {
                $this->schuetzenscreen_model->set_verein();
                $this->load->view('schuetzenscreen/success');
            }
        }
} // End class Schuetzenscreen