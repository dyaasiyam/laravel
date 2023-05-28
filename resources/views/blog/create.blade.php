@extends('layouts.app')

@section('content')<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp');
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">إضافة مدونة جديدة</h2>
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example4">عنوان المقال</label>
                    <input type="text" id="form6Example4" class="form-control"name="title" />
                  </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">مقال الموضوع</label>
                    <textarea class="form-control" id="form6Example7" rows="4" name="des"></textarea>
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">إضافة صورة</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="image" type="file">
                  </div>

                  <div class="mt-5">
                    <button type="submit" class="btn btn-success">نشر المقال</button>
                  </div>

              </div>


              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
@endsection
