<?php
use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public $base_url = 'http://it-ebooks-api.info/v1/search/';

	public $lastPage;
	public $firstPage = 1;
	public $nextPage;
	public $previousPage;
	public static $pageNumberPublic;
	public static $keywordPublic;
	public $pageStart1 = 0;
	
	


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('books_model');	
	}


	public function show_discussion_comments()
	{
		// $data1 = array(
	    //                 'inputdefault' => 'aaaaaaa',
	    //                 'inputlg'=> 'aaaaaaa'
	    //                     );
				// echo json_encode($data1);
		

		$aa = $this->books_model->getBooksComments();
		// var_dump($aa);
		foreach ($aa as $value1) 
		{
			// var_dump($value1);
			// echo $value1->id;
			// echo $value1->name;
			// echo $value1->comments;
			
			echo "<div class='row'>";
		              echo "<div class='col-md-12'>";
		                   echo "<span class='glyphicon glyphicon-star'></span>";
		                    echo "<span class='glyphicon glyphicon-star'></span>";
		                    echo "<span class='glyphicon glyphicon-star'></span>";
		                    echo "<span class='glyphicon glyphicon-star'></span>";
		                    echo "<span class='glyphicon glyphicon-star-empty'></span>";
		               echo $value1->name;
		                echo "<span class='pull-right'>10 days ago</span>";
					echo "<p>".$value1->comments."</p>";
		            echo "</div>";
		        echo "</div>";
		        // echo "<hr>";


			// foreach ($value1 as $value) 
			// {
			// 	# code...
			// 	// var_dump($value);
				
			// }
		}
				// echo "<div class='row'>";
		  //             echo "<div class='col-md-12'>";
		  //                  // <!--  <span class="glyphicon glyphicon-star"></span>
		  //                  //  <span class="glyphicon glyphicon-star"></span>
		  //                  //  <span class="glyphicon glyphicon-star"></span>
		  //                  //  <span class="glyphicon glyphicon-star"></span>
		  //                  //  <span class="glyphicon glyphicon-star-empty"></span> -->
		  //              echo "Anonymous"; 
		  //               echo "<span class='pull-right'>10 days ago</span>";
				// 	echo "<p>This product was great in terms of quality. I would definitely buy another!</p>";
		  //           echo "</div>";
		  //       echo "</div>";
	}
	
	public function run_cc()
	{
		$this->load->view('cc');
	}
	
	public function discussion()
	{

		
         //        $data = array(
         //            'inputdefault' => $this->input->post('inputdefault'),
         //            'inputlg'=>$this->input->post('inputlg')
         //                );
	        // echo json_encode($data);
				
				$data1 = array(
				'name'=> $this->input->post('inputdefault'),
				'comments'=>$this->input->post('inputlg')
				);
				$this->books_model->saveBooksDiscussion($data1);

				// $data1 = array(
		    //                 'inputdefault' => 'me',
		    //                 'inputlg'=> 'me'
		    //                     );
						// echo json_encode($data1);



			// $aaaa = $this->session->userdata('abc_id1');
			// var_dump($aaaa);
			// $data = array(
			// 	'idii'=>$aaaa
			// 	);
			// $abcd1['aa'] = $this->books_model->getSingleBook($data);
			// $this->load->view('book_show_view',$abcd1);
	}	

	public function check()
	{
		$responce = $this->curl->simple_get($this->base_url.'xml'."/2");
		$responceDecode = json_decode($responce,true);
		// var_dump(json_decode($json));
		if ($responceDecode['Error'] == 0) 
		{
		 	# code...
			// var_dump($responceDecode);
			// print_r($responceDecode);
			// echo $responceDecode['Books'][0]['Title'];
			// print_r($responceDecode['Books']);
			echo 'Total books is : '.$responceDecode['Total']."<br><br>";

			// if ($responceDecode['Total']>12) 
			// {
			// 	# code...
			// 	$booksCount = count($responceDecode['Books']);
			// 	if($booksCount!=12)
			// 	{
					
			// 	}

			// 	// while ($booksCount!=12) 
			// 	// {
			// 	// 	# code...
			// 	// }
				
			// 	// $responce = $this->curl->simple_get($this->base_url.$this->input->post('searchBar'));
			// 	// $responceDecode = json_decode($responce,true);

			// }

			foreach ($responceDecode['Books'] as $key => $value) 
			{
				# code...
				foreach ($value as $key1 => $value1) {
					# code...
					echo  $key1." and ".$value1."<br>";
				}
				echo "<br>";
			}
		}	
	}

	public function abc()
	{
		// $this->load->view('index1.php');
		$val = '2007';
		$aa11 = strlen($val);
		var_dump($val);	
		$bb = substr($val, 0, 1);
		var_dump($bb);
		if ($aa11 == 4) 
		{
			$aa = $bb."000";
		}
		elseif ($aa11 == 3) {
			$aa = $bb."00";
		}
		elseif ($aa11 == 2) {
			$aa = $bb."0";
		}
		// $bb+=10;
		$int1 = (int)$aa;
		var_dump($int1);
	}

	public function showBookView()
	{
		# code...
		$product_id = $this->uri->segment(3);
		$this->session->set_userdata('abc_id1',$product_id);
		$data = array(
			'ID'=>$product_id
			);

		$abcd1['aa'] = $this->books_model->getSingleBook($data);

		
		// // var_dump($abcd1);
		// $aa11 = $this->books_model->getSingleBook($data);
		// $this->session->set_userdata('aa_session',$aa11);
		$this->load->view('book_show_view',$abcd1);

	}



	//   http://localhost/as/2217/index.php/Welcome/firstPage1
	public function firstPage1()
	{
		$test = $this->session->userdata('CheckGetFromWhere');
		if ($test == "fromApi") 
		{
			$this->session->set_userdata('pagenumberSession','1');
			$keyword_session = $this->session->userdata('keywordSession');
			// var_dump($keyword_session);	
			$this->showData();
		}
		elseif ($test == "fromDb") 
		{
			$this->session->set_userdata('dbGetPageNumber_Start',0);
			$a = 0;
			$a+=10;
			$this->session->set_userdata('dbGetPageNumber_End',$a);
			$this->showData();
		}
		
	}
	

	//   http://localhost/as/2217/index.php/Welcome/nextPage1
	public function nextPage1()
	{
		$test = $this->session->userdata('CheckGetFromWhere');
		// if ($test == "fromApi") 
		{
			$lastpage_session = $this->session->userdata('lastpageSession');
			$pgS1 = $this->session->userdata('pagenumberSession');
			// var_dump($pgS1);
			if ($pgS1 == $lastpage_session) 
			{
				# code...
				$this->session->set_flashdata('alert1','Alreary on last age');
				redirect(base_url()."index.php/Welcome/showData");
			}
			$pgS1+=1;
			$this->session->set_userdata('pagenumberSession',$pgS1);
			
			$keyword_session = $this->session->userdata('keywordSession');
			$pag1 = $this->session->userdata('pagenumberSession');

			// var_dump($keyword_session);
			var_dump($pag1);

			// $this->session->userdata('id_number_start');
			// $this->session->userdata('id_number_start_endd');
			// $this->session->userdata('id_number_end');
			// $this->pageStart1+=12;
			$this->showData();
		}
		// if ($test == "fromDb") 
		// {
		// 	# code..

		// 	$finalPage = $this->session->userdata('Total_count');
				
		// 	// $val = '2007';
		// 	// $aa11 = strlen($finalPage);
		// 	// var_dump($finalPage);	
		// 	// $bb = substr($finalPage, 0, 1);
		// 	// var_dump($bb);
		// 	// if ($aa11 == 4) 
		// 	// {
		// 	// 	$aa = $bb."000";
		// 	// }
		// 	// elseif ($aa11 == 3) {
		// 	// 	$aa = $bb."00";
		// 	// }
		// 	// elseif ($aa11 == 2) {
		// 	// 	$aa = $bb."0";
		// 	// }
		// 	// // $bb+=10;
		// 	// $start1 = (int)$aa;
		// 	// // var_dump($int1);

		// 	// $start1 ;


		// 	// $total_c = $this->session->userdata('Total_count');
		// 	// $final_c = $this->session->userdata('dbGetPageNumber_End');
		// 	// if ($total_c == $final_c) 
		// 	// {
		// 	// 	$this->session->set_flashdata('alert1','Alreary on last page');
		// 	// 	redirect(base_url()."index.php/Welcome/showData");
		// 	// }
		// 	// else
		// 	{
		// 		$Start_w_end = $this->session->userdata('dbGetPageNumber_End');

		// 		// $this->session->set_userdata('dbGetPageNumber_Start',$Start_w_end);
		// 		$a1 = $Start_w_end;
		// 		$a1+=10;

		// 		if ($a1>$finalPage) 
		// 		{
		// 			$finalPage = $this->session->userdata('Total_count');
				
		// 			// $val = '2007';
		// 			$aa11 = strlen($finalPage);
		// 			var_dump($finalPage);	
		// 			$bb = substr($finalPage, 0, 1);
		// 			var_dump($bb);
		// 			if ($aa11 == 4) 
		// 			{
		// 				$aa = $bb."000";
		// 			}
		// 			elseif ($aa11 == 3) {
		// 				$aa = $bb."00";
		// 			}
		// 			elseif ($aa11 == 2) {
		// 				$aa = $bb."0";
		// 			}
		// 			// $bb+=10;
		// 			$int1 = (int)$aa;
		// 			var_dump($int1);			
					
		// 			// $finalPage ;

		// 			$this->session->set_userdata('dbGetPageNumber_Start',$int1);
		// 			// $a = 0;
		// 			// $a+=10;
		// 			$this->session->set_userdata('dbGetPageNumber_End',$finalPage);
		// 			$this->showData();

		// 			// $this->session->set_flashdata('alert1','Alreary on last page');
		// 			// redirect(base_url()."index.php/Welcome/showData");
		// 		}
		// 		else
		// 		{
		// 			$Start_w_end = $this->session->userdata('dbGetPageNumber_End');

		// 			$this->session->set_userdata('dbGetPageNumber_Start',$Start_w_end);
		// 			$a = $Start_w_end;
		// 			$a+=10;
		// 			$this->session->set_userdata('dbGetPageNumber_End',$a);
		// 			$this->showData();
		// 		}

		// 	}			
		// }


		
	}
	
	public function cc()
	{
		// var_dump(current_url());	
		// var_dump(base_url());
		// var_dump(base_url(uri_string()));
		$abc = $this->session->userdata('lastpageSession');
		var_dump($abc);
		$finalPage = '1516';
		var_dump($finalPage);
		$aa11 = strlen($finalPage);
			if ($aa11 == 4) 
			{	
				$bb = substr($finalPage, 0, 3);
				var_dump($bb);
				$aa = $bb."0";
			}
			elseif ($aa11 == 3) {
				$bb = substr($finalPage, 0, 2);
				var_dump($bb);
				$aa = $bb."0";
			}
			elseif ($aa11 == 2) {
				$bb = substr($finalPage, 0, 1);
				var_dump($bb);
				
				$aa = $bb."0";
			}
			// $bb+=10;
			$int1 = (int)$aa;
			var_dump($int1);

	}
	public function previousPage1()
	{
		$test = $this->session->userdata('CheckGetFromWhere');
		if ($test == "fromApi") 
		{
			$pgS1 = $this->session->userdata('pagenumberSession');
			// var_dump($pgS1);
			if ($pgS1 == 1 ) {
				# code...
				echo "Alreary on First page";
				$this->session->set_flashdata('alert1','Alreary on First page');
				redirect(base_url()."index.php/Welcome/showData");
			}
			else
			{
				$pgS1-=1;
				$this->session->set_userdata('pagenumberSession',$pgS1);
				$keyword_session = $this->session->userdata('keywordSession');
				$pag1 = $this->session->userdata('pagenumberSession');

				// var_dump($keyword_session);
				var_dump($pag1);
				$this->showData();
			}
		}
		elseif ($test == "fromDb") 
		{
			$Start_w = $this->session->userdata('dbGetPageNumber_Start');
			
			if ($Start_w == 0) 
			{
				# code...
				$this->session->set_flashdata('alert1','Alreary on First page');
				redirect(base_url()."index.php/Welcome/showData");
			}
		
			$this->session->set_userdata('dbGetPageNumber_End',$Start_w);
		
			$a = $Start_w;
			$a-=10;
			$this->session->set_userdata('dbGetPageNumber_Start',$a);

			// $this->session->set_userdata('dbGetPageNumber_End',$a);
			$this->showData();
		}
		
		
	}
	

	//   http://localhost/as/2217/index.php/Welcome/lastPage1
	public function lastPage1()
	{
		$test = $this->session->userdata('CheckGetFromWhere');
		if ($test == "fromApi") 
		{
			$lastpage_session = $this->session->userdata('lastpageSession');
			var_dump($lastpage_session);
			$this->session->set_userdata('pagenumberSession',$lastpage_session);
			$pag1 = $this->session->userdata('pagenumberSession');
			$keyword_session = $this->session->userdata('keywordSession');
			var_dump($keyword_session);
			var_dump($pag1);
			var_dump(base_url());
			// redirect(base_url()."index.php/Welcome/showData");
			// $this->showData();

			$this->showData();
		}
		elseif ($test == "fromDb") 
		{
			$finalPage = $this->session->userdata('Total_count');
				
			// $val = '2007';
			$aa11 = strlen($finalPage);
			var_dump($finalPage);	
			$bb = substr($finalPage, 0, 1);
			var_dump($bb);
			if ($aa11 == 4) 
			{
				$aa = $bb."000";
			}
			elseif ($aa11 == 3) {
				$aa = $bb."00";
			}
			elseif ($aa11 == 2) {
				$aa = $bb."0";
			}
			// $bb+=10;
			$int1 = (int)$aa;
			var_dump($int1);			
			
			// $finalPage ;

			$this->session->set_userdata('dbGetPageNumber_Start',$int1);
			// $a = 0;
			// $a+=10;
			$this->session->set_userdata('dbGetPageNumber_End',$finalPage);
			$this->showData();
		}
	}

	public function show1()
	{
		echo "<a href='http://it-ebooks-api.info/v1/search/android'>abcd</a>";
	}
	
	public function show2()
	{
		echo "<a href='http://it-ebooks-api.info/v1/search/android'>abcd</a>";
		echo "http://it-ebooks-api.info/v1/search/php mysql";
		$abc = $_GET['searchBar'];
		$temp = explode(' ', $abc);
		$temp2 = implode('+', $temp);
		var_dump($temp2);
		// var_dump("http://it-ebooks-api.info/v1/search/".$temp2);
		$responce = $this->curl->simple_post("http://it-ebooks-api.info/v1/search/".$temp2);
		var_dump(json_decode($responce,true));
	}

	public function getApiDataCurl($kyeyword,$pageNumber)
	{
		$keyword_session = $this->session->userdata('keywordSession');
		$pagenumber_session = $this->session->userdata('pagenumberSession');
		// print_r($keyword_session);		print_r($pagenumber_session);

		// if ($pagenumber_session!='1') 
		{
			$abc = $keyword_session;
			$temp = explode(' ', $abc);
			$temp2 = implode('+', $temp);
			$responce = $this->curl->simple_post($this->base_url.$temp2."/page/".$pagenumber_session);
			var_dump($this->base_url.$temp2."/page/".$pagenumber_session);
			// var_dump($responce);
		}
		// else

		{
			// $this->curl->create($this->base_url.$keyword_session);
			// $this->curl->option('buffersize', 10);
			// $this->curl->option('returntransfer', 1);
			// $data = $this->curl->execute();
			// var_dump($data);
		
			// // create a new cURL resource
			// $ch = curl_init();

			// // set URL and other appropriate options
			// curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
			// curl_setopt($ch, CURLOPT_HEADER, 0);

			// // grab URL and pass it to the browser
			// curl_exec($ch);

			// // close cURL resource, and free up system resources
			// curl_close($ch);
			// $abc = $keyword_session;
			// $temp = explode(' ', $abc);
			// $temp2 = implode('+', $temp);
			// // var_dump($this->base_url.$keyword_session);
			// $responce = $this->curl->simple_get($this->base_url.$temp2);
		}


		// $responceDecode = json_decode($responce,true);
		// return $responceDecode;
		// var_dump($this->base_url.$keyword_session);
		// var_dump($responce);
		// var_dump(json_decode($responce,true));
		return json_decode($responce,true);
	}


	public function index()
	{
		// $data=array('name'=>'umair');
		// $model_return = $this->books_model->getData($data);
		// $name1 = array('name' =>$model_return[0]->name);

		// $_POST['searchBar'] = $this->input->get('searchBar');
		// $this->form_validation->set_rules('searchBar','book name','required');
		if (isset($_GET['searchBar'])) 
		{
			# code...
			// var_dump($_GET['searchBar']);
			$this->session->set_userdata('keywordSession',$this->input->get('searchBar'));
			$this->session->set_userdata('pagenumberSession','1'); 

			$this->session->set_userdata('dbGetPageNumber_Start',0);
			$a = 0;
			$a+=10;
			$this->session->set_userdata('dbGetPageNumber_End',$a);


			$this->showData();
		}
		else
		{
			// print_r($model_return);
			// $this->session->set_flashdata('errorZeroBooks','Enter keyword first!');
			// $this->load->view('index1.php',$abc);
			$this->load->view('welcome_message');
		}
		// if ($this->form_validation->run() === TRUE) 
		// {
		// 	$this->session->set_userdata('keywordSession',$this->input->post('searchBar'));
			
		// 	// static::$keywordPublic = $this->input->post('searchBar');
		// 	$this->session->set_userdata('pagenumberSession','1'); 
		// 	$this->showData();
		// }
		// else
		// {
		// 	// print_r($model_return);
		// 	$this->load->view('welcome_message');
		// 	// $this->load->view('index1.php',$abc);
			
		// }
	}


	public function showData()
	{
		// $urlOfApi = $this->base_url.$this->input->post('searchBar');
		// echo "<a href='$urlOfApi'>show data</a>";

		
		// $client = new Client([
		//     // Base URI is used with relative requests
		//     'base_uri' => 'http://httpbin.org',
		//     // You can set any number of default request options.
		//     'timeout'  => 2.0,
		// ]);

		// $response = $client->get('http://httpbin.org/get');

		$product_id = $this->uri->segment(3);
		// var_dump($product_id);
		if (isset($product_id)) 
		{
			# code...
			$this->session->set_userdata('pagenumberSession',$product_id);
		}

		$a11 = $this->session->userdata('lastpageSession');
		$a111 = $this->session->userdata('pagenumberSession');
				
		if (isset($a11)) 
		{
			# code...
			if ($a11 < $a111) 
			{
				# code...
				$this->session->set_flashdata('errorZeroBooks','Select pages from pagination!');
				// $this->load->view('welcome_message.php');
				redirect(base_url());
			}

		}


		$keyword_session = $this->session->userdata('keywordSession');
		$pagenumber_session = $this->session->userdata('pagenumberSession');
		// var_dump($pagenumber_session);
		
		
		

		$data = array('keyword'=>$keyword_session);
		$check1 = $this->books_model->check_keyword_exist($data);
		// var_dump($check1);
		// $check1[0]->keyword	='NILL';

		


		if ($check1[0]->keyword == $keyword_session) 
		{
			$data11 = array(
				'keyword'=>$keyword_session,
				);
			$keyData = $this->books_model->getKeyword1($data11);
			// var_dump($keyData);
			// echo $keyData[0]->id;
			$this->session->set_userdata('lastpageSession',$keyData[0]->total_page);
		}
		else
		{
			$responceDecode = $this->getApiDataCurl($keyword_session,$pagenumber_session);
			// $key=array('keyword'=>$keyword_session,);

			$totalBooks = $responceDecode['Total'];
			// $this->session->set_userdata('total_books',$totalBooks);
			// var_dump($totalBooks);
			if ($totalBooks == '0') 
			{
				# code...
				// echo "pass";
				$this->session->set_flashdata('errorZeroBooks','No Book found!');
				// $this->load->view('welcome_message.php');
				redirect(base_url());

				exit;
			}

			$error = $responceDecode['Error'];
			if ($error != '0') 
			{
				# code...
				// echo "pass";
				$this->session->set_flashdata('errorZeroBooks',$responceDecode['Error']);
				// $this->load->view('welcome_message.php');
				redirect(base_url());
				exit;
			}

			$temp1 = $responceDecode['Total'];
			// $temp1 = 462;
			$temp2 = ($temp1/10);
			$temp3 = round($temp2);
			if ($temp2 < $temp3) {
				# code...
			}
			else
			{
				$temp3=$temp3 + 1;
			}
			// $lastNumber = round($temp2); 
			$lastNumber = $temp3;
			// $lastNumber = 47;
			// var_dump($lastNumber);
			$this->session->set_userdata('lastpageSession',$lastNumber);



			// $this->session->set_userdata('pagenumberSession',$product_id);

			$data11 = array(
				'keyword'=>$keyword_session,
				'total_page'=>$lastNumber,
				);
			$this->books_model->saveKeywordData($data11);
		}



		$data11 = array(
				'keyword'=>$keyword_session,
				);
			$keyData = $this->books_model->getKeyword1($data11);


		$page1 = $this->session->userdata('pagenumberSession');
		// var_dump($page1);
		// var_dump($keyData[0]->id);
		$data44 = array(
			'keyword_id'=>$keyData[0]->id,
			'page_number'=>$page1,
			
			); 
		$books = $this->books_model->check_key_pg_books($data44);
		// var_dump($books);
		if ($books == 'Not exist')
		{
			$responceDecode = $this->getApiDataCurl($keyword_session,$pagenumber_session);

			// var_dump($responceDecode['Books']);
			// $this->load->view('showBooks_view.php',$abc);
			// var_dump($abc);

			
			$totalBooks = $responceDecode['Total'];
			$this->session->set_userdata('total_books',$totalBooks);
			$v = 10;
			$totalBooks1 = $this->session->userdata('total_books');
			$totalBooks1;
			// var_dump($totalBooks1);

			$vv = $this->session->userdata('lastpageSession');
			$a = $vv * 10;
			
			$pagenumber_session = $this->session->userdata('pagenumberSession');

			if ($pagenumber_session == $vv) 
			{
				$z = substr($totalBooks1, -1);
				$v = $z;
			}
			var_dump($responceDecode['Books']);
			// if (empty($responceDecode['Books'])) 
			// {
			// 	$abc['aa'] = $responceDecode['Books'];
			// 	$this->session->set_flashdata('alert11','Having Problem on this page, Please try again after some time thank you!');
			// 	$this->load->view('index1',$abc);
			// 	// exit;
			// }
			if (!empty($responceDecode['Books'])) 
			{
				# code...
				for ($i=0; $i <$v ; $i++) 
				{ 
					if (empty($responceDecode['Books'][$i]['SubTitle'])) 
					{	$responceDecode['Books'][$i]['SubTitle'] = " ";		}

					if (empty($responceDecode['Books'][$i]['isbn'])) 
					{ 	$responceDecode['Books'][$i]['isbn'] = " ";  	}
					
					if (empty($responceDecode['Books'][$i]['Description'])) 
					{ 	$responceDecode['Books'][$i]['Description'] = " ";  	}


				
					$booksData =array(
							'ID'=>$responceDecode['Books'][$i]['ID'],
							'Title'=>$responceDecode['Books'][$i]['Title'],
							'SubTitle'=>$responceDecode['Books'][$i]['SubTitle'],
							'Description'=>$responceDecode['Books'][$i]['Description'],
							'Image'=>$responceDecode['Books'][$i]['Image'],
							'isbn'=>$responceDecode['Books'][$i]['isbn'],
							'keyword_id'=>$keyData[0]->id,
							'page_number'=>$page1
							);
					$aa1 = $this->books_model->saveBooksData($booksData);
					if ($aa1) 
					{
						var_dump("inserted");
						# code...
					}
				}		

			}
			
			var_dump('from API');
			$abc['aa'] = $responceDecode['Books'];
			// var_dump($responceDecode['Books']);
			// $this->load->view('showBooks_view.php',$abc);
			// var_dump($abc);
			if (empty($responceDecode['Books'])) 
			{
				# code...
				$this->session->set_flashdata('alert11','Having Problem on this page, Please try again after some time thank you!');
				// echo "lll";	 
				// var_dump('aaaaaaaaaaaaaaaaaaaaaaaa');
			}
				$this->load->view('index1',$abc);
			

		}
		else
		{
			var_dump('from DB');
			
			// var_dump($books);

			$abc['aa'] = $books;
			// $this->load->view('showBooks_view.php',$abc);
			$this->load->view('index2',$abc);
		}

		// $books_ids = array();

		// // var_dump($responceDecode['Books']);
		// foreach ($responceDecode['Books']  as $key => $value) 
		// {
		// 	// var_dump($responceDecode['Books'][$key]["ID"]);
		// 	$books_ids[] = $responceDecode['Books'][$key]["ID"];
		// }
		// // var_dump($books_ids); 

		// $check = $this->books_model->check_book_exist_id($books_ids);

		// if ($check == "Not exist") 
		// {
		// 	$keyData = $this->books_model->getKeyword1($data11);
		// 	# code...
		// 	var_dump('PASS SHOW FROM API');
		// 	for ($i=0; $i <10 ; $i++) 
		// 	{ 
		// 		if (empty($responceDecode['Books'][$i]['SubTitle'])) 
		// 			{	$responceDecode['Books'][$i]['SubTitle'] = " ";		}

		// 			if (empty($responceDecode['Books'][$i]['isbn'])) 
		// 			{ 	$responceDecode['Books'][$i]['isbn'] = " ";  	}
					
		// 			if (empty($responceDecode['Books'][$i]['Description'])) 
		// 			{ 	$responceDecode['Books'][$i]['Description'] = " ";  	}
		// 		$booksData =array(
		// 				'ID'=>$responceDecode['Books'][$i]['ID'],
		// 				'Title'=>$responceDecode['Books'][$i]['Title'],
		// 				'SubTitle'=>$responceDecode['Books'][$i]['SubTitle'],
		// 				'Description'=>$responceDecode['Books'][$i]['Description'],
		// 				'Image'=>$responceDecode['Books'][$i]['Image'],
		// 				'isbn'=>$responceDecode['Books'][$i]['isbn'],
		// 				'keyword_id'=>$keyData[0]->id,
		// 				'page_number'=>$product_id
		// 				);
		// 		$this->books_model->saveBooksData($booksData);
		// 	}

		// 	$this->session->set_userdata('CheckGetFromWhere',"fromApi");

		// 	$abc['aa'] = $responceDecode['Books'];
		// 	// $this->load->view('showBooks_view.php',$abc);
		// 	$this->load->view('index1',$abc);
		// }
		// else
		// {
			


		// 	var_dump("FAIL GET FROM DB");
		// 	$data00 = array(
		// 		'keyword_id'=>$check1[0]->id);
		// 	$show_data_db = $this->books_model->getDataFromKey($data00);
		// 	// var_dump($show_data_db);

		// 	$final_count = count($show_data_db);
		// 	$this->session->set_userdata('Total_count',$final_count);
			
			
		// 	$start_1 = $this->session->userdata('dbGetPageNumber_Start');
		// 	$end_1 = $this->session->userdata('dbGetPageNumber_End');

			
			
		// 	$show222 = array();
		// 	for ($i=$start_1; $i <$end_1 ; $i++) 
		// 	{ 
		// 		# code...
		// 		$show222[] = $show_data_db[$i];
		// 	}

		// 	$this->session->set_userdata('CheckGetFromWhere',"fromDb");

		// 	// var_dump($show222);

		// 	// $show_data_db 
		// 	$abc['aa'] = $show222;
		// 	// var_dump($show_data_db);

		// 	// $this->load->view('showBooks_view.php',$abc);
		// 	$this->load->view('index2',$abc);

		// }































































		// $ids = array();
		// foreach ($query->result_array() as $id)
		//     {
		//         $ids[] = $id['id'];
		//     }

		// $this->db->where_in('id', $ids);
		// if (condition) {
		// 	# code...
		// }
		











		// var_dump($responceDecode['Books']);
		// $abc['aa'] = $responceDecode;
		// $abc['aa'] = $responceDecode['Books'];

		// $this->load->view('showBooks_view.php',$abc);
		// $this->load->view('index1',$abc);
		
		// var_dump($responceDecode['Books']);
		// // var_dump($responceDecode['Books']);

		// $this->load->view('showBooks_view.php',$abc);
		// $this->load->view('index1.php',$abc);
		// redirect('index.php/welcome/index');



// 		$temp1 = $responceDecode['Total'];
// 		// $temp1 = 462;
// 		$temp2 = ($temp1/10);
// 		$temp3 = round($temp2);
// 		if ($temp2 < $temp3) {
// 			# code...
// 		}
// 		else
// 		{
// 			$temp3=$temp3 + 1;
// 		}
// 		// $lastNumber = round($temp2); 
// 		$lastNumber = $temp3;
// 		// $lastNumber = 47;
// 		// var_dump($lastNumber);
// 		$this->session->set_userdata('lastpageSession',$lastNumber);
// 		// $this->lastPage = $lastNumber;

// 		var_dump($keyword_session);
// 		$data = array('keyword'=>$keyword_session);
// 		$check1 = $this->books_model->check_keyword_exist($data);
// 		// var_dump($check1);
		
// 		// $check1[0]->keyword	='NILL';
		
// 		if ($check1[0]->keyword == $keyword_session) 
// 		{
// 			$data00 = array(
// 				'keyword_id'=>$check1[0]->id);
			
// 			// $id_number_count = $this->books_model->Data_Id_number($data00);
// 			// $id_last = count($id_number_count);
// 			// var_dump($id_last);
// 			// var_dump($id_number_count);


// 			// $start = $id_number_count[0]->idii;
// 			// $end = $id_number_count[$id_last-1]->idii;
// 			// var_dump($start);
// 			// $endd =  $start+11;
// 			// var_dump($endd);
// 			$show_data_db = $this->books_model->getDataFromKey($data00);

// // $this->session->set_userdata('id_number_start',$start);
// // $this->session->set_userdata('id_number_start_endd',$endd);
// // $this->session->set_userdata('id_number_end',$end);


// 			$aa1 ="FETCH FROM DATABASE";
// 			var_dump($aa1);
				

// 			// var_dump($responceDecode['Books']);
// 			$abc['aa'] = $show_data_db;
// 			// var_dump($show_data_db);

// 			// $this->load->view('showBooks_view.php',$abc);
// 			$this->load->view('index2.php',$abc);
// 			// redirect('index.php/welcome/index');
// 		}
// 		else
// 		{
// 			$aa ="FETCH FROM API";
// 			var_dump($aa);
// 			$data11 = array(
// 				'keyword'=>$keyword_session,
// 				);
// 			$this->books_model->saveKeywordData($data11);

// 			// $data22 = array(
// 			// 	'keyword'=>$keyword_session,
// 			// 	);

// 			$keyData = $this->books_model->getKeyword1($data11);
// 			// var_dump($keyData);
// 			// echo $keyData[0]->id;

// 			for ($j=1; $j<=$lastNumber ; $j++) { 
// 				# code...
// 				$responce1 = $this->curl->simple_post($this->base_url.$keyword_session."/page/".$j);
// 				$responceDecode1 = json_decode($responce1,true);

// 				$cc1 = count($responceDecode1['Books']);
// 				// var_dump($cc1);
// 				for ($i=0; $i <$cc1 ; $i++) 
// 				{ 
// 					# code...
// 					if (empty($responceDecode1['Books'][$i]['SubTitle'])) 
// 					{	$responceDecode1['Books'][$i]['SubTitle'] = "";		}

// 					if (empty($responceDecode1['Books'][$i]['isbn'])) 
// 					{ 	$responceDecode1['Books'][$i]['isbn'] = "";  	}
					
// 					if (empty($responceDecode1['Books'][$i]['Description'])) 
// 					{ 	$responceDecode1['Books'][$i]['Description'] = "";  	}

// 					$booksData =array(
// 						'ID'=>$responceDecode1['Books'][$i]['ID'],
// 						'Title'=>$responceDecode1['Books'][$i]['Title'],
// 						'SubTitle'=>$responceDecode1['Books'][$i]['SubTitle'],
// 						'Description'=>$responceDecode1['Books'][$i]['Description'],
// 						'Image'=>$responceDecode1['Books'][$i]['Image'],
// 						'isbn'=>$responceDecode1['Books'][$i]['isbn'],
// 						'keyword_id'=>$keyData[0]->id
// 						);
// 					$this->books_model->saveBooksData($booksData);
// 					// echo $j.$i." ".$responceDecode1['Books'][$i]['Title']."<br>";		
// 				}
// 			}
		
// 			// var_dump($keyword_session);
// 			$data = array('keyword'=>$keyword_session);
// 			$check1 = $this->books_model->check_keyword_exist($data);
// 			// var_dump($check1);
// 			$data00 = array(
// 				'keyword_id'=>$check1[0]->id);

// 			// $id_number_count = $this->books_model->Data_Id_number($data00);
// 			// var_dump($id_number_count);

// 			$show_data_db1 = $this->books_model->getDataFromKey($data00);

// 			$aa1 ="FETCH FROM DATABASE";
// 			var_dump($aa1);
			

// 			// var_dump($responceDecode['Books']);
// 			$abc['aa'] = $show_data_db1;
// 			// var_dump($show_data_db);

// 			// $this->load->view('showBooks_view.php',$abc);
// 			$this->load->view('index2.php',$abc);
// 			// redirect('index.php/welcome/index');


// 			// // var_dump($responceDecode['Books']);
// 			// $abc['aa'] = $responceDecode['Books'];
// 			// // var_dump($responceDecode['Books']);

// 			// // $this->load->view('showBooks_view.php',$abc);
// 			// $this->load->view('index1.php',$abc);
// 			// // redirect('index.php/welcome/index');

			
// 		}
// 		// var_dump($responceDecode);
// 		// $responce = $this->curl->simple_get($this->base_url.$this->input->post('searchBar'));
// 		// $responceDecode = json_decode($responce,true);
// 		// var_dump(json_decode($json));
// 		if ($responceDecode['Error'] == 0) 
// 		{
// 		 	# code...
// 			// var_dump($responceDecode);
// 			// print_r($responceDecode);
// 			// echo $responceDecode['Books'][0]['Title'];
// 			// print_r($responceDecode['Books']);
// 			// echo 'Total books is : '.$responceDecode['Total']."<br><br>";
// 			// echo 'current page is : ';
// 			// var_dump($responceDecode['Page'])."<br><br>";
			
		

// 			// if ($responceDecode['Total']>12) 
// 			// {
// 			// 	# code...
// 			// 	if(count($responceDecode['Books']))
// 			// 	{

// 			// 	}
				
// 			// 	// $responce = $this->curl->simple_get($this->base_url.$this->input->post('searchBar'));
// 			// 	// $responceDecode = json_decode($responce,true);

// 			// }

// 			// foreach ($responceDecode['Books'] as $key => $value) 
// 			// {
// 			// 	# code...
// 			// 	foreach ($value as $key1 => $value1) {
// 			// 		# code...
// 			// 		echo  $key1." and ".$value1."<br>";
// 			// 	}
// 			// 	echo "<br>";
// 			// }
// 		} 

// 		// var_dump($responceDecode['Books']);
// 		// $abc['aa'] = $responceDecode['Books'];
// 		// var_dump($responceDecode['Books']);

// 		// $this->load->view('showBooks_view.php',$abc);
// 		// $this->load->view('index1.php',$abc);
// 		// redirect('index.php/welcome/index');


	}


}
