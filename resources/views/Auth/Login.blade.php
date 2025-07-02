<x-layout>
    <form action="{{route('Login')}}" method="POST">
    @csrf
    <h2>LogIn To Your Account</h2>

    <label for="Name">Name:</label>
    <input type="Name" name="Name" required value="{{old('Name')}}">

    <label for="Email">Email:</label>
    <input type="Email" name="Email" required value="{{old('Email')}}">

    <label for="Password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit" class="btn mt-4">Login</button>

    {{-- Validation Error --}}
    @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-600">{{$error}}</li>
            @endforeach
        </ul>
    @endif
</form>
</x-layout>
