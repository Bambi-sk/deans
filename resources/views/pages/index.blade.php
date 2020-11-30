@extends('layouts.appAdmin')
@section('breadcumbText')
Основная страница
@endsection
@section('card')
<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Справки</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/myspravki">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Заявлении</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/myzaev">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/">Посмотреть</a>
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
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://static.tildacdn.com/tild3466-3130-4635-a236-363337396637/Logotip_KBTU.jpg" alt=""/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                               Скандер Ботакоз 
                            </h5>
                            <h6>
                               ВТиПО-1802
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
                    <p>Академическая степень</p>
                    <p style="color: black;">Бакалавр</p>
                    
                    <p>Факультет</p>
                    <p style="color: black;">ФКТК</p><br/>
                    <p>Код спец.</p>
                    <p style="color: black;">5B070400</p><br/>
                   
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Номер студента</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>26529</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Ф.И.О.</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Скандер Ботакоз</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Почта</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>26529@edu.iitu.kz</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Номер телефона </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>87019909393</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Специальность</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Вычислительная техника и программное обеспечение</p>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Дата рождение </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>13.08.2000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Пол</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Женский</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Национальность</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Казах/Казашка</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Семейное положение</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>холост</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Курс</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>3 </p>
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
