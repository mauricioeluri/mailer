<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

		public function __construct() {
				parent:: __construct();
				$this->load->helper(array('form', 'utility'));
				$this->load->library('form_validation');
		}

		public function form_simp(){
				$this->form_validation->set_rules('simp-nome', 'Nome', 'required|max_length[255]');
				$this->form_validation->set_rules('simp-email', 'E-mail', 'required|valid_email|max_length[255]');
				$this->form_validation->set_rules('simp-mensagem', 'Mensagem', 'required|max_length[255]');

				$this->form_validation->set_message('max_length', 'O campo %s deve ter no máximo %s caractere(s).');
				if ($this->form_validation->run() == FALSE) {
						$this->index('f', validation_errors());
				} else {
						$msg_simples = array(
								'nome' => $this->input->post('simp-nome'),
								'email' => $this->input->post('simp-email'),
								'tel' => $this->input->post('simp-tel'),
								'mensagem' => $this->input->post('simp-mensagem')
						); 

						$mensagem = $this->load->view('v_email_simples', $msg_simples, true);
						$this->index($this->envia_email($mensagem), 't');
				}
		}
		public function form_trab(){
				$this->form_validation->set_rules('trab-nome', 'Nome', 'required|max_length[255]');
				$this->form_validation->set_rules('trab-email', 'E-mail', 'required|valid_email|max_length[255]');
				$this->form_validation->set_rules('trab-nasc', 'Nascimento', 'required|max_length[255]');
				$this->form_validation->set_rules('trab-tel', 'Telefone', 'required|max_length[255]');
				$this->form_validation->set_rules('trab-cep', 'Cep', 'required|max_length[255]');

				$this->form_validation->set_message('max_length', 'O campo %s deve ter no máximo %s caractere(s).');
				if ($this->form_validation->run() == FALSE) {
						$this->index('f', validation_errors());
				} else {
						$msg_trab = array(
								'nome' => $this->input->post('trab-nome'),
								'email' => $this->input->post('trab-email'),
								'nasc' => $this->input->post('trab-nasc'),
								'tel' => $this->input->post('trab-tel'),
								'cep' => $this->input->post('trab-cep'),
								'escolaridade' => $this->input->post('trab-escolaridade'),
								'cargoPretendido' => $this->input->post('trab-cargoPretendido'),
								'estadoCivil' => $this->input->post('trab-estadoCivil'),
								'situacaoProfissional' => $this->input->post('trab-situacaoProfissional'),
								'ultimoEmprego' => $this->input->post('trab-ultimoEmprego'),
								'saiuUltimaEmpresa' => $this->input->post('trab-saiuUltimaEmpresa'),
								'tempoTrabalhou' => $this->input->post('trab-tempoTrabalhou'),
								'mensagemTrabConosco' => $this->input->post('trab-mensagemTrabConosco')
						); 

						$mensagem = $this->load->view('v_email_trab', $msg_trab, true);
						$this->index($this->envia_email($mensagem), 't');
				}
		}

		private function envia_email($msg){
				$config = Array(
						'protocol'	 => 'smtp',
						'smtp_host'	 => 'ssl://mail.customsys.com.br',
						'smtp_port'	 => '465',
						'smtp_user'	 => 'webmaster@customsys.com.br',
						'smtp_pass'	 => 'cl@5sics',
						'mailtype'	 => 'html',
						'charset'	 => 'utf-8'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('webmaster@customsys.com.br', 'Webmaster Customsys');
				$this->email->to('gerencia@customsys.com.br');
				$this->email->subject('Nova mensagem do site customsys!');
				$this->email->message($msg);
				if ($this->email->send()) {
						echo "Mensagem Enviada com sucesso!";
						return TRUE;
				} else {
						show_error($this->email->print_debugger());
						return FALSE;
				}
		}

		public function index($resultado = NULL, $erros = NULL){
				if($resultado == 't'){
						$variaveis = array(
								'tit' => 'Sua mensagem foi enviada com sucesso!',
								'texto' => 'Obrigado por entrar em contato conosco!'
						);
				} else if ($resultado == 'f'){
						$variaveis = array(
                            'tit' => 'Houve um erro ao enviar sua mensagem! Por favor, tente novamente.',
								'texto' => $erros
						);
				}
				else {
						redirect(base_url()); 	
				}
				$this->load->view('v_mensagem', $variaveis);
		}
}
