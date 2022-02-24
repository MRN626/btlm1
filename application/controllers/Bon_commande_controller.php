<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bon_commande_controller extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bon_commande_model');
    } 

    /*
     * Listing of tb_bon_commande
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tb_bon_commande/index?');
        $config['total_rows'] = $this->Bon_commande_model->get_all_tb_bon_commande_count();
        $this->pagination->initialize($config);

        $data['tb_bon_commande'] = $this->Bon_commande_model->get_all_tb_bon_commande($params);
        
        $data['_view'] = 'bon_commande/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_bon_commande
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('designation_produit','Designation Produit','required|max_length[75]');
		$this->form_validation->set_rules('quantite','Quantite','required|integer');
		$this->form_validation->set_rules('type_commande','Type Commande','required|max_length[15]');
		$this->form_validation->set_rules('statut_commande','Statut Commande','required|max_length[15]');
		$this->form_validation->set_rules('besoin_id','Besoin Id','required|integer');
		$this->form_validation->set_rules('serv_gen_id','Serv Gen Id','required|integer');
		$this->form_validation->set_rules('daf_id','Daf Id','required|integer');
		$this->form_validation->set_rules('dg_id','Dg Id','required|integer');
		$this->form_validation->set_rules('fournisseur_id','Fournisseur Id','required|integer');
		$this->form_validation->set_rules('date_creation','Date Creation','required');
		$this->form_validation->set_rules('observation','Observation','required');
		$this->form_validation->set_rules('proformat_valider','Proformat Valider','required');
		$this->form_validation->set_rules('facture','Facture','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'type_commande' => $this->input->post('type_commande'),
				'statut_commande' => $this->input->post('statut_commande'),
				'besoin_id' => $this->input->post('besoin_id'),
				'serv_gen_id' => $this->input->post('serv_gen_id'),
				'daf_id' => $this->input->post('daf_id'),
				'dg_id' => $this->input->post('dg_id'),
				'fournisseur_id' => $this->input->post('fournisseur_id'),
				'designation_produit' => $this->input->post('designation_produit'),
				'quantite' => $this->input->post('quantite'),
				'date_creation' => $this->input->post('date_creation'),
				'observation' => $this->input->post('observation'),
				'proformat_valider' => $this->input->post('proformat_valider'),
				'facture' => $this->input->post('facture'),
            );
            
            $tb_bon_commande_id = $this->Bon_commande_model->add_tb_bon_commande($params);
            redirect('bon_commande_controller/index');
        }
        else
        {
			$this->load->model('Fiche_besoin_model');
			$data['all_tb_fiche_besoin'] = $this->Fiche_besoin_model->get_all_tb_fiche_besoin();

			$this->load->model('Services_gen_model');
			$data['all_tb_services_gen'] = $this->Services_gen_model->get_all_tb_services_gen();

			$this->load->model('Daf_model');
			$data['all_tb_daf'] = $this->Daf_model->get_all_tb_daf();

			$this->load->model('Dg_model');
			$data['all_tb_dg'] = $this->Dg_model->get_all_tb_dg();

			$this->load->model('Fournisseur_model');
			$data['all_tb_fournisseur'] = $this->Fournisseur_model->get_all_tb_fournisseur();
            
            $data['_view'] = 'bon_commande/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tb_bon_commande
     */
    function edit($bon_commande_id)
    {   
        // check if the tb_bon_commande exists before trying to edit it
        $data['tb_bon_commande'] = $this->Bon_commande_model->get_tb_bon_commande($bon_commande_id);
        
        if(isset($data['tb_bon_commande']['bon_commande_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('designation_produit','Designation Produit','required|max_length[75]');
			$this->form_validation->set_rules('quantite','Quantite','required|integer');
			$this->form_validation->set_rules('type_commande','Type Commande','required|max_length[15]');
			$this->form_validation->set_rules('statut_commande','Statut Commande','required|max_length[15]');
			$this->form_validation->set_rules('besoin_id','Besoin Id','required|integer');
			$this->form_validation->set_rules('serv_gen_id','Serv Gen Id','required|integer');
			$this->form_validation->set_rules('daf_id','Daf Id','required|integer');
			$this->form_validation->set_rules('dg_id','Dg Id','required|integer');
			$this->form_validation->set_rules('fournisseur_id','Fournisseur Id','required|integer');
			$this->form_validation->set_rules('date_creation','Date Creation','required');
			$this->form_validation->set_rules('observation','Observation','required');
			$this->form_validation->set_rules('proformat_valider','Proformat Valider','required');
			$this->form_validation->set_rules('facture','Facture','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'type_commande' => $this->input->post('type_commande'),
					'statut_commande' => $this->input->post('statut_commande'),
					'besoin_id' => $this->input->post('besoin_id'),
					'serv_gen_id' => $this->input->post('serv_gen_id'),
					'daf_id' => $this->input->post('daf_id'),
					'dg_id' => $this->input->post('dg_id'),
					'fournisseur_id' => $this->input->post('fournisseur_id'),
					'designation_produit' => $this->input->post('designation_produit'),
					'quantite' => $this->input->post('quantite'),
					'date_creation' => $this->input->post('date_creation'),
					'observation' => $this->input->post('observation'),
					'proformat_valider' => $this->input->post('proformat_valider'),
					'facture' => $this->input->post('facture'),
                );

                $this->Bon_commande_model->update_tb_bon_commande($bon_commande_id,$params);            
                redirect('bon_commande_controller/index');
            }
            else
            {
				$this->load->model('Fiche_besoin_model');
				$data['all_tb_fiche_besoin'] = $this->Fiche_besoin_model->get_all_tb_fiche_besoin();

				$this->load->model('Services_gen_model');
				$data['all_tb_services_gen'] = $this->Services_gen_model->get_all_tb_services_gen();

				$this->load->model('Daf_model');
				$data['all_tb_daf'] = $this->Daf_model->get_all_tb_daf();

				$this->load->model('Dg_model');
				$data['all_tb_dg'] = $this->Dg_model->get_all_tb_dg();

				$this->load->model('Fournisseur_model');
				$data['all_tb_fournisseur'] = $this->Fournisseur_model->get_all_tb_fournisseur();

                $data['_view'] = 'bon_commande/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_bon_commande you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_bon_commande
     */
    function remove($bon_commande_id)
    {
        $tb_bon_commande = $this->Bon_commande_model->get_tb_bon_commande($bon_commande_id);

        // check if the tb_bon_commande exists before trying to delete it
        if(isset($tb_bon_commande['bon_commande_id']))
        {
            $this->Bon_commande_model->delete_tb_bon_commande($bon_commande_id);
            redirect('bon_commande_controller/index');
        }
        else
            show_error('The tb_bon_commande you are trying to delete does not exist.');
    }
    
}
