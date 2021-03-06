@extends('layout.layout')

@section('content')
<script src="{{asset('js/script_register.js')}}"></script>

 <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



	<div class="page-header">
		<h1>Sign up <small>Go on, it's free!</small></h1>
	</div>
			<div class="col-md-3"></div>
			
			<div class="col-md-6">
	
			<div  class="progress progress-striped active" id="progress_bar">
				<div id="progress" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				<div id="progress_text">Nimic completat inca!</div>
			</div>
		<div id="container">
			
			<form action="{{action('UsersController@PostRegister')}}" method="post" enctype="multipart/form-data" id="form_register">
			
					<!-- #first_step -->
					<div id="first_step">
						<h1>Informatiile de <span>Baza!</span></h1>

						<div class="form-group has-feedback" id="div_username">
							<input type="text" name="username" id="username" value="username" class="form-control" />
							<label for="username">Cel putin 6 caractere, cifre sau litere.</label>
						</div> 
						<div class="form-group has-feedback" id="div_password">
							<input type="password" name="password" id="password" value="password"  class="form-control"  />
							<label for="password">Parola, cu litere si cifre</label>
						</div> 	
						<div class="form-group has-feedback" id="div_cpassword">
							<input type="password" name="cpassword" id="cpassword" value="password"  class="form-control"  />
							<label for="cpassword">Parola din nou!Trebuie sa completezi acest camp identic cu cel de mai sus pentru a putea continua!</label>
						</div>      <!-- clearfix --><!-- /clearfix -->
						
						
						<div class="span7 text-right">
						<div class="btn btn-success"  id="submit_first" >Pasul urmator</div>
						</div>
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


					<!-- #second_step -->
					<div id="second_step">
						<h1>Acum spune-ne <span>Cine </span> esti!</h1>

						<div class="form-group has-feedback" id="div_firstname">
							<input type="text" name="firstname" id="firstname" value="nume" class="form-control" />
							<label for="firstname">Numele dumneavoastra? </label>
						</div> 	
						<div class="form-group has-feedback" id="div_avatar">
							
							<input type="file" class="form-control" name="avatar" id="avatar" />
							<label for="avatar">Avatar</label>
						</div>	
						<div class="form-group has-feedback" id="div_email">
							<input type="text" name="email" id="email" value="email address"  class="form-control"  />
							<label for="email">Adresa de email? Asa va putem contacta mai usor! </label>                    
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						
						<div class="span7 text-right">
						<div class="btn btn-success"   id="submit_second" >Pasul urmator</div>
						</div>
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


					<!-- #third_step -->
					<div id="third_step">
						<h1>Daca nu e cu suparare <span>Detalii </span> mai precise...</h1>

						<div class="form-group has-feedback" id="div_age">
							<select id="age" name="age" class="form-control" >
								<option> 0 - 17</option>
								<option>18 - 25</option>
								<option>26 - 40</option>
								<option>40+</option>
							</select>
							<label for="age">Varsta dumneavoastra? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						</div>
						<div class="form-group has-feedback" id="div_gender">
							<select id="gender" name="gender" class="form-control"  >
								<option>Masculin</option>
								<option>Feminin</option>
							</select>
							<label for="gender">Genul dumneavoastra? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						</div>
						<div class="form-group has-feedback" id="div_country">	
							<select id="country" name="country" class="form-control" >
								<option>Romania</option>
								<option>UE</option>
								<option>America</option>
								
							</select>
							<label for="country">Unde va putem gasi? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
							
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						
						<div class="span7 text-right">
						<div class="btn btn-success"  id="submit_third"> Pasul Urmator</div>
						</div>
						
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
					
					
					<!-- #fourth_step -->
					<div id="fourth_step">
						<h1>Va multumim pentru inregistrare!<hr> <span>Daca informatiile sunt corecte</span> apasati inregistrare pentru a finaliza operatia</h1>

						<div class="form">
							
							<table>
								<tr><td>Username &nbsp;</td><td></td></tr>								
								<tr><td>Email</td><td></td></tr>
								<tr><td>Nume</td><td></td></tr>
								<tr><td>Varsta</td><td></td></tr>
								<tr><td>Gen</td><td></td></tr>
								<tr><td>Zona</td><td></td></tr>
							</table>
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						
						<div class="span7 text-right">
						<input class="btn btn-success" type="submit" name="submit_fourth" id="submit_fourth" value="Inregistrare" />
						</div>						
					</div>
					<input type="hidden" id="link_signup"  value="{{action('UsersController@PostSignUp')}}"/>
				</form>
			</div>
			<div class="col-md-3"></div>
					
		</div>
@stop