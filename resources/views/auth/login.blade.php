@extends('layouts.app')

@section('content')

    
              <div class="d-flex justify-content-center ">

                <div class="text-center w-50 p-3 rounded border" id="corpo">
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">   
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        @csrf

                        
                            <label for="inputEmail" class="sr-only"></label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"  required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Essas credenciais não correspondem aos nossos registros.</strong>
                                    </span>
                                @enderror
                           
                        

                        
                            <label for="password" class="sr-only"></label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        

                        
                            <div class="checkbox mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar') }}
                                    </label>
                                </div>
                            </div>
                        

                        
                            
                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                                <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
                        
                    </form>
                </div>
            </div> 

@endsection
