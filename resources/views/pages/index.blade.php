@extends('layouts.app')
@section('breadcumbText')
Основная страница
@endsection
@section('card')
<div class="row ml-2">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Справки</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/student/cert">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@section('breadcrumb')
    <i class="fas fa-user"></i>
        Профиль Студента
@endsection
@section('cardBody')
<div class="container emp-profile">
    <form method="post">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="profile-img">
                    <img style="width:70%" style="max-height:100px;" style="max-width:200px;"  src="https://static.tildacdn.com/tild3466-3130-4635-a236-363337396637/Logotip_KBTU.jpg"  alt=""/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                @if (auth()->check())
                                   {{$student->lastname}} {{$student->firstname}}
                                @endif
                                
                            </h5>
                            <h6>
                                @foreach ($stream as $s)
                                @if ($s->id==$student->id_stream)
                                {{$s->name}}
                                @endif
                                 @endforeach
                            </h6>
                            
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Academic degree</p>
                    <p style="color: black;">Bachelor</p>
                    
                    <p>Dean </p>
                    <p style="color: black;">
                       
                    @foreach ($speciality as $s)
                        @if ($s->id==$student->id_spec)
                            @foreach ($deans as $d)
                                @if ($d->id==$s->deans_office_id)
                                    {{$d->dean_name}}
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    </p><br/>
                    <p>Code specialitty</p>
                    <p style="color: black;">  
                    @foreach ($speciality as $s)
                        @if ($s->id==$student->id_spec)
                                {{$s->code}}
                        @endif
                    @endforeach
                </p><br/>
                   
                </div>
            </div>
            <div class="col-md-8 mt-5">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No Student</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$student->id}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$student->firstname}}   {{$student->lastname}}</p>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Speciality</label>
                                    </div>
                                    <div class="col-md-6">
                                    <p>  
                                        @foreach ($speciality as $s)
                                            @if ($s->id==$student->id_spec)
                                            {{$s->name}}
                                            @endif
                                        @endforeach
                                    </p>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Birth Date </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$student->birthdate}}</p>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nationality</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> 
                                            @foreach ($nationality as $n)
                                            @if ($n->id==$student->id_nation)
                                           {{$n->name}}
                                            @endif
                                        @endforeach
                                    </p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Course</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> @foreach ($stream as $s)
                                            @if ($s->id==$student->id_stream)
                                           {{$s->year}}
                                            @endif
                                             @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>
@endsection
