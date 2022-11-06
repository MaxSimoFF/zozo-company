<div class="js-cookie-consent cookie-consent fixed-bottom rounded-top rounded-0 shadow-lg alert bg-mine text-center mb-0" role="alert">

    <h4 class="alert-heading text-white"><i class="fas fa-fw fa-cookie-bite me-2"></i>Cookies</h4>

    <!-- Cookie Message -->

    <p class="text-white">

        {!! trans('cookie-consent::texts.message') !!}

    </p>

    <!-- Btn: Accept Cookies -->

    <a class="js-cookie-consent-agree cookie-consent__agree btn btn-success col-12 col-md-auto mx-auto text-white text-decoration-none mb-3"
        title="{{ __('cookie-consent::texts.agree') }}">

        {{ trans('cookie-consent::texts.agree') }}

    </a>

</div>

