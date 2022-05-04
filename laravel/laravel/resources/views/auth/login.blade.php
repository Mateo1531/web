@extends('layout')

@section('content')
<div style="height:60px; min-height: 5px;max-height: 100px; "></div>
<x-guest-layout>
    
    <x-jet-authentication-card>
        
        <div>
            <div style="height:51px; text-align: center;font-size: larger;font-weight: 800;">
                <label for="">¡Inicia sesión en tu cuenta de MAFGAT!</label>
            </div>
            <div class ="btnStarSession">
                <a href=""  class="logoStartSession" ><img   style=" margin: 8px;" src="{{asset('img/logoGoogle.png')}}" alt=""></a>
                <label  class= "block mt-1 w-full" style="padding: 11px 0px 0px 70px;" for="" type="button">Continuar con Google</label>
            </div>
            <div class ="btnStarSession" style="padding-top:10px;  ">
                <a href="" class="logoStartSession" style="margin-left: 8px;"><img   src="{{asset('img/logFb.png')}}" alt=""></a>
                <label class="" for="" style="padding-left: 30px;" type="button" >Continuar con Facebook</label>
            </div>
            
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('customLogin') }}" style="padding-top: 12px ">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection