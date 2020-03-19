@extends('layouts/nav')

@section('content')
<section class="mbr-section form1 cid-rSTllXpGo8" id="form1-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">聯絡我們</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">親愛的會員及網友您好，若您有任何意見或疑問，我們誠摯地邀請您直接寄到我們專人服務的電子郵件信箱。</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                <!---Formbuilder Form--->
                <form action="/contact" method="POST" class="mbr-form form-with-styler" >
                    @csrf
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" >
                            <label for="name-form1-3" class="form-control-label mbr-fonts-style display-7">您的大名</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-3">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-3" class="form-control-label mbr-fonts-style display-7">您的E-mail</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-3">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-3" class="form-control-label mbr-fonts-style display-7">您的聯絡電話</label>
                            <input type="number" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-3">
                        </div>
                        <div data-for="content" class="col-md-12 form-group">
                            <label for="content-form1-3" class="form-control-label mbr-fonts-style display-7">信件內容 <br></label>
                            <textarea name="content" data-form-field="content" class="form-control display-7" id="content-form1-3"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center d-flex">
                            <button type="submit" class="btn btn-primary btn-form display-4">確認送出</button>
                            {!! htmlFormSnippet() !!}

                            @error('g-recaptcha-response')
                                    <strong class=".text-danger">請勾選選驗證碼!</strong>
                            @enderror
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

@endsection



