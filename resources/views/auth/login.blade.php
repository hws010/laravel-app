<x-layout title="Login">
    <div class="flex justify-center">
        <form action="{{ route('login') }}" method="post">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Login</legend>

                <label for="email" class="label">Email</label>
                <input id="email" name="email" required type="email" class="input" placeholder="Email" value="{{ old('email') }}" />
                <x-forms.error name='email' />
    
                <label class="label">Password</label>
                <input id="password" name="password" required type="password" class="input" placeholder="Password" value="{{ old('password') }}" />
                <x-forms.error name='password' />
    
                <button type="submit" class="btn btn-neutral mt-4">Login</button>
            </fieldset>
        </form>
    </div>
</x-layout>