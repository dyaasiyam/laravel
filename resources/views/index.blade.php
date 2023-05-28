@extends('layouts.app')
@section('content')
{{-- {{$posts}} --}}
<style>
    .main{
        background-image:url('../img/aerial-view-business-team.jpg');
        height: 60vh;
        background-size: cover;
        background-position:center;
    }
    .text{
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%);
        text-align: center;
    }
    .main h2{
        font-weight: bold;
        color: white;

    }
  body{
    font-family: Arial, Helvetica, sans-serif;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="main mb-5 bp-5">
    <div class="text">
        <h2 class="pt-4 pb-2">مرحبا بكم في مدونتي </h2>
        <p class="text-white-50">الأن يمكنك إنشاء المدونة الخاصة بك عن طريق موقع مدونتي</p>
        <a href="" class="btn btn-secondary"> إبدأ بالقراءة</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-lg-6">
            <h3>مدونتي </h3>
            <p>مرحبا بكم في موقع مدونتي يمكنكم إنشاء مدونة خاصة بكم
                من مميزات موقع مدونتي سهولة الاستخدام وسهولة التصفح كم أيضا سهولة في إنشاء حساب والتسجيل على موقع المدونة سهولة في الرتصفح
            </p>
            <a href="/" class="btn btn-success">قراءة المزيد</a>
            </div>
        <div class="col-lg-6">
            <img src="img/blog2.png" class="img-fluid" alt="">
        </div>

    </div>
</div>
</body>
</html>
@endsection
