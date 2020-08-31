<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$setting->title}} | Sign up Form</title>
    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keywords}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
</head>
<body>
<div class="bg-container">
    <!-- <img src="img/Group 680.png" alt="picture" class="left-panel" /> -->
    <div class="left-panel" style="background-image: linear-gradient(to bottom, {{$setting->gradient_from}}, {{$setting->gradient_to}})">
        <img style="height: 30px" src="{{$setting->getFirstMediaUrl('logo')}}" alt="company logo" class="company-logo-white">
        <h1 class="webinar-title">
{{--            <span>Virtual</span> <br> Event <br> 2020--}}
            {!! $setting->event_title !!}
        </h1>
    </div>
    <div class="right-panel">
        <div class="right-panel__content-box">
            <h1 class="right-panel__header">Register</h1>
            <form action="{{route('webinar.register')}}" method="post" class="right-panel__form" id="register-form">
                @csrf
                <div class="form__group field">
                    <input
                        type="input"
                        class="form__field"
                        placeholder="First Name"
                        name="first_name"
                        id="first-name"
                        required
                    />
                    <label for="first-name" class="form__label">First Name</label>
                </div>
                <div class="form__group field">
                    <input
                        type="input"
                        class="form__field"
                        placeholder="Last Name"
                        name="last_name"
                        id="last-name"
                        required
                    />
                    <label for="last-name" class="form__label">Last Name</label>
                </div>
                <div class="form__group field">
                    <input
                        type="email"
                        class="form__field"
                        placeholder="Email"
                        name="email"
                        id="email-id"
                        required
                    />
                    <label for="email-id" class="form__label">Email ID</label>
                </div>
                <div class="form__group field">
                    <input
                        type="text"
                        class="form__field"
                        placeholder="mobile"
                        name="mobile"
                        id="mobile"
                        required
                    />
                    <label for="mobile" class="form__label">Mobile</label>
                </div>
                <div class="form__group field">
                    <input
                        type="input"
                        class="form__field"
                        placeholder="organization"
                        name="organization"
                        id="organization"
                        required
                    />
                    <label for="organization" class="form__label">Organization</label>
                </div>
                <div class="form__group field">
                    <input
                        type="input"
                        class="form__field"
                        placeholder="department"
                        name="department"
                        id="department"
                        required
                    />
                    <label for="department" class="form__label">Department</label>
                </div>
                <div class="form__group field">
                    <input
                        list="cities"
                        class="form__field"
                        placeholder="city"
                        name="city"
                        id="city"
                        required
                    />
                    <datalist id="cities">
                        <option value="Cairo">
                        <option value="Alexandria">
                        <option value="Aswan">
                        <option value="Luxor">
                        <option value="Sharm El Shekha">
                    </datalist>
                    <label for="city" class="form__label">City</label>
                </div>
            </form>
            <button  style="background-image: linear-gradient(to bottom, {{$setting->gradient_from}}, {{$setting->gradient_to}})" type="submit" class="form-btn" form="register-form"> Submit</button>
        </div>
    </div>
</div>
</body>
</html>
