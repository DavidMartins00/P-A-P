<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site/index');
    }

    public function add()
    {
        return view('user/register');
    }

    public function menu()
    {
        return view('site/menu');
    }

    public function sender(Request $request)
    {
        if (isset($_POST['send_message_btn'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msg = $_POST['msg'];
            // Content-Type helps email client to parse file as HTML
            // therefore retaining styles
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $message = "<html>
            <head>
            	<title>Nova mensagem do Website</title>
            </head>
            <body>
            	<h1>" . $subject . "</h1>
            	<p>" . $msg . "</p>
            </body>
            </html>";
            if (mail('dasmartins1234@gmail.com', $subject, $message, $headers)) {
                echo "<div class=\'alert alert-success\' role=\'alert\'>
  Email enviado com sucesso
</div>";
            } else {
                echo "Failed to send email. Please try again later";
            }
        }
    }
}
