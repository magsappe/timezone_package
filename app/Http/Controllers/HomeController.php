<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use PDF;
use App;
use Illuminate\Support\Str;
use URL;
use Dompdf\Dompdf;
class HomeController extends Controller {
	
	public function index() {
		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml('hello world');
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream();
	}
}