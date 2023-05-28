@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container text-center">
    <div class="row ">
        <div class="col mt-5 pb-4 ">
            <a href="/blog/create" class="btn btn-danger">إنشاء مدونة</a>

        </div>
</div>
@endif


</div>
    <div class="text-center pb-5 mb-5">
        <h1>جميع المدونات</h1>
    </div>

    <div class="container pb-5 mb-5">
        <div class="row justify-content-center align-items-center text-end">
            <div class="col-lg-6">
                <img src="img/freelance-young-asian-businesswoman-casual-wear-using-laptop-working-living-room-home.jpg"
                    class="img-fluid" alt="">
            </div>
            <div class="col lg-6">
                <h3>كيف تقوم بإنشاء مدونة خاصة بك عبر الموقع</h3>
                <div>
                    بواسطة: <span>ضياء صيام</span>
                    <p>نقوم بإنشاء مدونة عبر الموقع أول خطوة نقوم بإنشاء حساب خاص بكم الخطوة الثانية الدخول على الحساب عبر
                        تسجيل الدخول ومن ثم الضغط على ايقونة اضافة مدونة جديدة </p>
                    <div class="text-center">
                        <a href="/" class="btn btn-danger text-center">قراءة المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4">
    </div>





    @foreach ($posts as $post)
        <div class="container pb-5 mb-5">
            <div class="row justify-content-center align-items-center text-end">
                <div class="col-lg-6">
                    <img src="{{ $post->image_path }}"
                        class="img-fluid" alt="">
                </div>
                <div class="col lg-6">
                    <h3>{{ $post->title }}</h3>
                    <div>

                        بواسطة: <span>{{ $post->user->name }}</span><br>
                        تاريخ الإنشاء: <span>{{ date('d-m-y',strtotime($post->updated_at))}}</span>
                        <p>{{ $post->des }}</p>
                        <div class="text-center">
                            <a href="/blog/{{ $post->slug }}" class="btn btn-danger text-center">قراءة المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-4">
        </div>
    @endforeach
@endsection
