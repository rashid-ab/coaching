<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Challenge;
use App\ChallengeFile;
use App\Task;
use App\TaskFile;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ApiController extends Controller
{
    public function index()
    {
        $user=User::all();
        return response()->json(['status'=>'success','data'=>$user]);
    }

    public function signup(Request $request)
    {
       $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => $request->role,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'bio' => $request->bio,
            'experties' => $request->experties,
            'status' => '1',
        ]);
        return response()->json(['status'=>'success','data'=>$user]);
    }

    public function login(Request $request){
        // return $request->password;
        $token=Str::random(10);
        $login=auth::attempt(array('email' => $request->email, 'password' => $request->password ));
        $user=User::where('email',"r@r.com")->first();
        if($login){
            User::where('email',$request->email)->update([ 'token'=>$token ]);
            return response()->json(['status'=>'success','data'=>$user]);
        }
        else {
            return response()->json(['status'=>'fail']);
        }
    }
    public function send_code(Request $request){
        $email_send=User::where('email',$request->email)->first();
        if(is_null($email_send)){
            return response()->json('null');
        }
        else{
            $random_code = mt_rand(1000,9999);
        $email_submit=User::where('id',$email_send->id)->update([
        'code'=>$random_code,
        ]);

        $to      = $request->email;
         $subject = "Password Reset";

        $message = "
        <html>
        <head>
        <title>Reset Password</title>
        </head>
        <body>
        <h2>Your Code!</h2>
        <h1 style=color:#f50000>$random_code</h1>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: rashidbuttuog@gmail.com' . "\r\n";
        $headers .= 'Cc: rashidbuttuog@gmail.com' . "\r\n";

        mail($to, $subject, $message, $headers);
        return response()->json(['status'=>'success','data'=>'Code Sent to your Email']);
        }
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function code(Request $request)
    {
        // $user=User::where('token',$request->token)->first();
        $code=User::where('code',$request->code)->first();
        if(!is_null($code)){
            return response()->json(['status'=>'success','data'=>'Authentic Code']);
        }
        else{
            return response()->json(['status'=>'fail','data'=>'Your Code is wrong']);
        }
    }
    
    public function reset_Password(Request $request){
        $email_submit=User::where('email',$request->email)->update([
            'password'=>Hash::make($request->password),
            ]);
            return response()->json(['status'=>'success','data'=>'Password Reset Successfully!']);
    }

    public function challenge(Request $request){
        $challenge=Challenge::create([
                            'user_id'=>$request->user_id,
                            'category_id'=>$request->category_id,
                            'challenge_name'=>$request->challenge_name,
                            'challenge_type'=>$request->challenge_type,
                            'description'=>$request->description,
                            'start_time'=>$request->start_time,
                            'end_time'=>$request->end_time,
                            'notification'=>$request->notification,
                            'status'=>'1'
        ]);
        foreach($request->challenge_file as $challenge_file){
        if ($challenge_file['file']) {
			$file = $challenge_file['file'];
			$file_name = $file->getClientOriginalName();
			$file_ext = $file->getClientOriginalExtension();
			$lid = str_random(4);
			$fileInfo = pathinfo($file_name);
			$filename = $fileInfo['filename'];
			$newname = $filename . $lid . "." . $file_ext;
			$destinationPaths1 = app()->basePath('public/images/challenges');
            $file->move($destinationPaths1, $newname);
            $chellengefile=ChallengeFile::create([
            'challenge_id'=>$challenge->id,
            'file'=>url('/') . '/public/images/challenges/' . $newname,
            'status'=>'1'
        ]);
    }
}
    foreach($request->task as $tasks)
        {
        $task=Task::create([
                'challenge_id'=>$challenge->id,
                'title'=>$tasks['title'],
                'description'=>$tasks['description'],
                'status'=>'1'
        ]);
        }
        foreach($request->task_file as $task_file){
            if ($task_file['file']) {
                $file = $task_file['file'];
                $file_name = $file->getClientOriginalName();
                $file_ext = $file->getClientOriginalExtension();
                $lid = str_random(4);
                $fileInfo = pathinfo($file_name);
                $filename = $fileInfo['filename'];
                $newname = $filename . $lid . "." . $file_ext;
                $destinationPaths1 = app()->basePath('public/images/tasks');
                $file->move($destinationPaths1, $newname);
                $chellengefile=TaskFile::create([
                'task_id'=>$task->id,
                'file'=>url('/').'/public/images/tasks/'.$newname,
                'status'=>'1'
                ]);
    }
       
}
return response()->json(['status'=>'success','data'=>'Challenge Created']);

    }

        
}
