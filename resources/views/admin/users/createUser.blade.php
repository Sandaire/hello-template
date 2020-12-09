@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">						
							
							<div class="card-body">
							
								<form method="POST" action="{{ route('admin.users.store') }}">
									@csrf

									<div class="form-group row">
										<label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

										<div class="col-md-6">
											<input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

											@error('firstname')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

										<div class="col-md-6">
											<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

											@error('lastname')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="company" class="col-md-4 col-form-label text-md-right">Company</label>
										<div class="col-md-6">
											
												<div class="form-select">
													<select name="company" id= "company">
													<option value="">{{ 'Choose a transporter' }}</option>
													  @foreach($companies as $company)
														<option name="" value="{{ $company->id }}">{{ $company->name }}</option>
													 @endforeach
													</select>
												</div>
											
										</div>
									</div>

									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

										<div class="col-md-6">
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

										<div class="col-md-6">
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

										<div class="col-md-6">
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
										</div>
									</div>
									
									<div class="form-group row">
										<label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
										<div class="col-md-6">
											@foreach($roles as $role)
												<div class="form-check">
													<input type="checkbox" name="roles[]" value="{{ $role->id }}">
													<label>{{ $role->name }}</label>
												</div>
											@endforeach
										</div>
									</div>
									
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-primary">
												{{ __('Register') }}
											</button>
											<button type="text" class="btn btn-default">
												{{ ('Cancel') }}
											</button>
										</div>
									</div>
								</form>
							
							</div>
					  </div> <!-- end content -->
				
@endsection