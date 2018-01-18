### js show password 
Markup part
~~~html
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
</div>
<div class="form-group">
  <button data-status="hidden" id="eye" class="btn btn-info"> <i class="fa fa-eye"></i> Show password </button>
</div>
~~~

js part 
~~~js

  // var eye = $('#eye'), password = $('#password');

  // eye.on('click', function (){
  //   password.attr('type', 'text');
  // })

var eye = document.querySelector('#eye'), password = document.querySelector('#password');
eye.addEventListener('click', function () {
  var status = eye.dataset.status;
  if (status === 'hidden') {
    password.setAttribute('type', 'text');
    eye.dataset.status = 'show';
    eye.innerHTML = '<i class="fa fa-eye"></i> Hide password';
  } else {
    password.setAttribute('type', 'password');
    eye.dataset.status = 'hidden';
    eye.innerHTML = '<i class="fa fa-eye"></i> Show password';
  }
});
    
~~~

# Manual authentication

### Registration

~~~php
$this->validate();
$user = User::create([]);
Auth::login($user);
return redirect('some page');
~~~

# login from login page

~~~php
$this->validate();
if (Auth::attempt(['email' => $email, 'password' => $password])) {
  return redirect('some page');
}
~~~


### logout 
~~~php
Auth::logout();
return redirect('some page');
~~~


# Form validation 
~~~php
$this->validate($request, [
  'name' => 'required|min:2|max:20',
  'email' => 'required|email|unique:users',
  'password' => 'required|min:5|confirmed',
  'password_confirmation' => 'required'
]);
~~~
for email validation  use `email` and to make email unique on users table `unique:users`. for password confirmation input name will be `password_confirmation` and validate key value will be `confirmed`

### Error showing  in one block
~~~html
@if (count($errors)
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error) 
    <li>{{$error}}</li>
  @endforeach
  </ul>
</div>
@endif
~~~

### Error showing every field with if else statement 

~~~html
@if($errors->has('name'))
  <div class="bg-danger text-light mt-2 p-1"> <span>{{$errors->first('name')}}</span> </div>
@endif
~~~


### getting old value for input field 
~~~php
{% raw %}
{{old('input_field_name')}}
{% endraw %}
~~~

### about karnel
Karnel is the laravel main file which actually control all http request. 
### about alias

When we use a Class  we generally include use statement on top of the page. in case of same line we have to prefix `\`

~~~php
\Auth::logout();
or 
use Auth();
Auth::logout();
~~~

### some artisan command 

for maintenance mode
~~~bash
php artisan down
php artisan up
~~~




















