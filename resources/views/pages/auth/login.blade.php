<x-auth-layout>
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/" action="login">
        @csrf

        <!--Incio formulario de incio de sesion--->
        <div class="fv-row mb-8">
            <label>Correo electronico</label>
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="Introduzca su correo electronico"/>
        </div>
        <div class="fv-row mb-3">
            <label>Contraseña</label>
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="contraseña"/>
        </div>
        <!--Final formulario de incio de sesion--->

        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="/forgot-password" class="link-primary">
                Olvidaste la contraseña?
            </a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Sign In'])
            </button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="/register" class="link-primary">
                Sign up
            </a>
        </div>
        <!--end::Sign up-->
    </form>
    <!--end::Form-->

</x-auth-layout>
