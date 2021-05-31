<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
  *{
    box-sizing: border-box;
  }
	.wrapper{
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		grid-gap: 0;
		padding: 0;
		width: 100%;
	}
	.wrapper > div{
		padding: 1em;
	}	
	
	.box1{
		grid-column: 1/3;
	}
	.box5{
		grid-column: 1/2;
	}

	.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 0.5px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */

}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: lavender;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}

.column {
  float: left;
  width: 20%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>

</head>
<body>
<section>
	<div class="wrapper">
		<div class="box box1">
			 <div class="container" align="left" style="margin-bottom: 10px; margin-left: 0;">
          <! Icon and Title -->
          <div class="row">
            <div class="column">1</div>
            <div class="column">2</div>
          </div>      
        </div>
		</div>
		<div class="box box2">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/slide1.jpg" alt="Avatar" style="width:300px;height:100%; object-fit: cover;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box3">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/slide2.jpg" alt="Avatar" style="width:300px;height:100%; object-fit: cover;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box5">
			box 5
		</div>
		<div class="box box6">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box7">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box8">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box9">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box11">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box12">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
		<div class="box box13">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
		</div>
	</div>
		
	</div>
</section>
</body>
</html>

<h3 style="font-family: 'Caveat Brush';font-size: 45px;">Welcome to Pet Portal!</h3>
      <p style="font-family: 'Caveat Brush'; font-size: 25px;"><i>"Add a little wiggle to your life!"</i>🐕</p> 