<style>
section {
	margin: 1em 0;
}
.border-radius {
     -moz-border-radius: 120px 10px / 10px 120px;
     border-radius: 120px 10px / 10px 120px;
     -webkit-border-radius: 120px 10px / 10px 120px;
 }
section h2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 1.6em;
	margin-top: 0;
	margin-bottom: .5em;
	font-weight: normal;
	font-variant: small-caps;
	letter-spacing: .1em;
}

section h3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 1.4em;
	margin-bottom: .7em;
	font-weight: normal;
}
/*inset border styles*/
.inset {
	clear: both;
	background: #79bdd4;
	padding: 20px;
	width: auto;
}


.inset h2 {
	color: darkslategrey;
	font-family: Arial, Helvetica, sans-serif;
	font-variant: normal;
	font-weight: normal;
	text-align: center;
}

.inset ul {
	width: auto;
	padding: 0;
	padding-right: 20px;
	list-style: none;

}

.inset ul li {
	border-top: 1px solid rgb(20,20,20);
	border-bottom: 1px solid #e6e8e7;
}

.inset ul li:first-child {
	border-top: none;
}

.inset ul li:last-child {
	border-bottom: none;
}

.inset ul li a {
	padding: 15px;
	display: block;
	color: #fff;
	text-decoration: none;
}

.inset ul li a:hover {
	background: #b08495;
</style>



<div class="col-md-4">
   <section class="inset border-radius">
       <h2>Авторские работы</h2>
               <ul>
  @foreach($latest_products as $product)
   <li><a href="{{action ('ProductsController@show', [$product->id])}}" >{{$product->title}}</a></li>
  @endforeach
               </ul>
   </section>
   </div>