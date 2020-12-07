<?php

namespace App\Http\Controllers;
use App\Models\Certifications;
use App\Models\CerfTypes;
use Mail;
use App\Models\Nationalities;
use App\Models\Specialities;
use App\Models\Streams;
use App\Models\TypeStudies;
use App\Models\Students;
use App\Models\DeansOffices;
use App\Models\RequestCerts;
use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class RequestCertController extends Controller

{
    public function __construct()
  {
    $this->middleware('auth');
  }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cerf=Certification::all();
        // $requestCert=Request_cert::all();
        // $cerf_Type=Cerf_Type::all();
        // $students=Student::all();

        // return view('formsprav.index',['requestCert'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'students'=>$students]);
    }
    public function indexStudent()
    {
        //
        $id=auth()->user()->id;
        $student=Students::where('id_users',$id)->first();
        $requestCert=RequestCerts::where('student_id',$student->id)->get();
        $cerf_Type=CerfTypes::all();
       
        $cerf=Certifications::all();

        return view('pages.mysprav',['reqcer'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'student'=>$student]);
    }
    public function mailText()
    {
        return view('pages.emailText');
    }
    public function downloadCert($cert_id)
    {
        //
        $id=auth()->user()->id;
        $student=Students::where('id_users',$id)->first();
        $requestCert=RequestCerts::where('student_id',$student->id)->get();
        $cerfs=Certifications::find($cert_id);
        $cerf_Type=CerfTypes::all();
        $deans= DeansOffices::all();
        $stream=Streams::all();
        $speciality=Specialities::all();
        $streamStudent;
        $dean;
        foreach ($speciality as $s){ 
            if ($s->id==$student->id_spec){
                foreach ($deans as $d){
                    if ($d->id==$s->deans_office_id){
                        $dean=$d;
                    }
                }
            }
        }
        foreach($stream as $s){
            if($s->id==$student->id_stream){
                $streamStudent=$s;
            }
        }
        $specStudent;
        foreach($speciality as $s){
            if($s->id==$student->id_spec){
                $specStudent=$s;
            }
        }
        $cerf=Certifications::all();
        $params=[
            'student'=>$student,
            'dean'=>$dean,
            'streamStudent'=>$streamStudent,
            'specStudent'=>$specStudent,
            'cerf'=>$cerfs
        ];
        try {
            
        
            $html2pdf = new Html2Pdf('P', 'A4', 'fr');
            $html2pdf->setTestIsImage(false);
        
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML(
                view('pages/certification')->with($params)
            );
            $html2pdf->setDefaultFont('times');
            $html2pdf->addFont('times');
            $html2pdf->output('C:/Users/бота/Desktop/web-technologies/cert.pdf', 'F');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
        
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }
        
      
        return view('pages.mysprav',['reqcer'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'student'=>$student]);
    }
    public function sendEmail()
    {
        $id=auth()->user()->id;
        $student=Students::where('id_users',$id)->first();
        $requestCert=RequestCerts::where('student_id',$student->id)->get();
        $cerf_Type=CerfTypes::all();
       
        $cerf=Certifications::all();

        
        $data = array('name'=>"Deans");
        Mail::send('pages.emailText', $data, function($message) {
           $message->to(auth()->user()->email, auth()->user()->name)->subject
              ('Congrats! Your certificate ready ))');
           $message->attach('C:/Users/бота/Desktop/web-technologies/cert.pdf');
           $message->from('deanfdt1@gmail.com','Deans');
        });
        return view('pages.mysprav',['reqcer'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'student'=>$student]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
         $idS=auth()->user()->id;
        $student=Students::where('id_users',$idS)->first();
        $cerf = Certifications::find($id);
       
        $nationality=Nationalities::all();
        $speciality=Specialities::all();
        $stream=Streams::all();
        $typeStudy=TypeStudies::all();
        return view('pages.formsprav',['student'=>$student,'nationality'=>$nationality,
        'speciality'=>$speciality,'stream'=>$stream,'typeStudy'=>$typeStudy,'cerf'=>$cerf]);
    }
    public function listRequest()
    {
        //
        $cerf = Certifications::all();
        $students=Students::all();
        $requestCert=RequestCerts::all();
        $cerf_Type=CerfTypes::all();
        $stream=Streams::all();
        return view('pages.request',['cerf'=>$cerf,'students'=>$students,'requestCert'=>$requestCert,'cerf_Type'=>$cerf_Type,'stream'=>$stream]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requestCert=new RequestCerts();
        $requestCert->is_approved = false;
        $requestCert->student_id =$request->student_id;
        $requestCert->cert_id =$request->cert_id;
        $requestCert->curr_date =date("Y-m-d");
        $requestCert->save();
        return redirect('/student/cert')
            ->with('success', 'Object created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
       
        $cert = Certifications::find();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestCerts $request_cert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $is_app='';
        $id=$request->id;
        $cert = RequestCerts::find($id);
        $cert->is_approved=True;
        $cert->curr_date=date("Y-m-d");
        $cert->save();
        error_log($cert);
        return redirect('/listRequest')
            ->with('success', 'Object updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $request_cert = RequestCerts::findOrFail($id);
        $request_cert->delete();

        return redirect('/listRequest')
            ->with('success', 'Object deleted successfully');
    }
}
