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
	-webkit-box-shadow: 10px 10px 26px -5px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 26px -5px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 26px -5px rgba(0,0,0,0.75);
}


.inset h2 {
	color: darkslategrey;
	font-family: Arial, Helvetica, sans-serif;
	font-variant: normal;
	font-weight: normal;
	text-align: center;
	font-family: news-gothic-std, sans-serif;
      font-weight: 400;
      font-style: italic;
      background-color: #79bdd4;
      color: #bc2e1e;
      text-shadow:
        0 1px 0px #378ab4,
        1px 0 0px #5dabcd,
        1px 2px 1px #378ab4,
        2px 1px 1px #5dabcd,
        2px 3px 2px #378ab4,
        3px 2px 2px #5dabcd,
        3px 4px 2px #378ab4,
        4px 3px 3px #5dabcd,
        4px 5px 3px #378ab4,
        5px 4px 2px #5dabcd,
        5px 6px 2px #378ab4,
        6px 5px 2px #5dabcd,
        6px 7px 1px #378ab4,
        7px 6px 1px #5dabcd,
        7px 8px 0px #378ab4,
        8px 7px 0px #5dabcd;
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
       <h2>Творчество</h2>
               <ul>
                 @foreach($tags as $tag)
                 <li><a href="{{action ('TagsController@show', [$tag->name])}}" >{{$tag->name}}</a></li>
                 @endforeach
               </ul>
   </section>
   </div>

