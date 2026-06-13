<x-layout title="Register">
    <div class="flex justify-center">
        <form action="{{ route('create-account') }}" method="post">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Register</legend>

                <label for="username" class="label">Username</label>
                <input id="username" name="username" required type="text" class="input" placeholder="Username" value="{{ old('username') }}" />
                <x-forms.error name='username' />

                <label for="email" class="label">Email</label>
                <input id="email" name="email" required type="email" class="input" placeholder="Email" value="{{ old('email') }}" />
                <x-forms.error name='email' />
    
                <label class="label">Password</label>
                <input id="password" name="password" required type="password" class="input" placeholder="Password" />
                <x-forms.error name='password' />
                
                <label for="password_confirmation" class="label">Password again</label>
                <input id="password_confirmation" name="password_confirmation" required type="password" class="input" placeholder="Password again" />
                <x-forms.error name='password_confirmation' />
    
                <button type="submit" class="btn btn-neutral mt-4">Register</button>
            </fieldset>
        </form>
    </div>
</x-layout>