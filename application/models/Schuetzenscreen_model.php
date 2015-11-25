<?php
class Schuetzenscreen_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function get_verein()
        {
                $query = $this->db->get('Verein');
                return $query->result_array();
        }
    
        public function set_verein()
        {
            $this->load->helper('url');

            $data = array(
            'vereinsname' => $this->input->post('vereinsname'),
            'username' => $this->input->post('username'),
            'passwort' => $this->input->post('passwort'),
            'e-mail' => $this->input->post('email'),
            'telefon' => $this->input->post('telefon'),
            'strasse' => $this->input->post('strasse'),
            'plz' => $this->input->post('plz'),
            'ort' => $this->input->post('ort'),
            'ansprechpartner_name' => $this->input->post('name'),
            'ansprechpartner_vorname' => $this->input->post('vorname')
        );

        return $this->db->insert('Verein', $data);
        }
} // End Schuetzenscreen_model