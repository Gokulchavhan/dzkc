<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\Helper;
use \Common\Common;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\json_decode;

use Auth;
use Cookie;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index(Request $request)
    {
//         $res = Common::sendHttp('http://lrz.ucenter.com/api/router');
// 	    var_dump($res);die;

        
        // 接口调试成功
//         $client = new Client();
        
//         $form_params = array(
//             'app_id' => '1',
//             'method' => 'demo',
//             'nonce' => 'abc',
//         );
        
//         $sign = Common::generateMd5Sign($form_params);
        
//         $form_params['sign'] = $sign;
        
//         $res = $client->request('post','http://lrz.ucenter.com/api/router',[
//             'form_params' => $form_params
//         ]);
        
//         echo $res->getBody();die;
        
        
        return view('home');
    }
    
}
