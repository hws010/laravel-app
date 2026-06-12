<x-layout title="Register">
    <div class="flex justify-center">
        <form action="{{ route('create-account') }}" method="post">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Register</legend>
    
                <label for="username" class="label">Username</label>
                <input id="username" name="username" required type="text" class="input" placeholder="Username" />
    
                <label for="email" class="label" value="{{ old('email') }}">Email</label>
                <input id="email" name="email" required type="email" class="input" placeholder="Email" />
    
                <label class="label">Password</label>
                <input id="password" name="password" required type="password" class="input" placeholder="Password" />
                
                <label for="passowrd2" class="label">Password again</label>
                <input id="password2" name="password2" required type="password" class="input" placeholder="Password again" />
    
                <button type="submit" class="btn btn-neutral mt-4">Login</button>
            </fieldset>
        </form>
    </div>
</x-layout>