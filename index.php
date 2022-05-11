<!DOCTYPE html>
<html>
<head>
<title>Online Shopping </title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<style>

			*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'roboto', sans-serif;
}


.navbar {
position: sticky;
top: 0;
left: 0;
width: 100%;
background: #f5f5f5;
z-index: 9;
		}

		.background {
			background: #2874f0;
			background-blend-mode: darken;
			background-size: cover;
		}

		.nav-list {
			width: 70%;
			display: flex;
			align-items: center;
		}

		.logo {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.logo img {
			width: 100px;
			border-radius: 50px;
		}

		.nav-list li {
			list-style: none;
			padding: 30px;
		}

		.nav-list li a {
			text-decoration: none;
			color: white;
		}

			

		.rightnav {
			width: 30%;
			text-align: right;
		}

		#search {
			padding: 5px;
			font-size: 17px;
			border: 2px solid grey;
			border-radius: 9px;
		}

.card-product .img-wrap {
border-radius: 3px 3px 0 0;
overflow: hidden;
position: relative;
height: 220px;
text-align: center;
}
.card-product .img-wrap img {
max-height: 100%;
max-width: 100%;
object-fit: cover;
}
.card-product .info-wrap {
overflow: hidden;
padding: 15px;
border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
padding: 15px;
border-top: 1px solid #eee;
}
.label-rating { margin-right:10px;
color: #333;
display: inline-block;
vertical-align: middle;
}

h3{
    margin: 0;
    padding: 0 0 20px;
    text-align: left;
    font-size: 22px;
    color: black;
}


.text-footer {
			text-align: center;
			padding: 30px 0;
			font-family: 'Ubuntu', sans-serif;
			display: flex;
			justify-content: center;
			color: white;
		}

</style>
<body>
<div class="container">
<br><br><br>
<h3 class="title">MYSTORE.COM</h3>


<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "logo.jpg">
			</div>
			<li><a href="#Electrical">Electrical Products</a></li>
			<li><a href="#Electronics">Electronic Products</a></li>
			
		</ul>

		<div class="rightNav">
			


			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>




<br><br><br>
<br><br>


<div class="row">
<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://support.content.office.net/en-us/media/e8384959-ad1a-1b95-762b-2861496b886e.png"></div>

<figcaption class="info-wrap">
<h4 class="title">Mouse</h4>
</figcaption>
<div class="bottom-wrap">
<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="800" data-id="1">Order Now</a> 
<div class="price-wrap h5">
<span class="price-new">₹800</span>
</div> 
</div> 
</figure>
</div> 

<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://5.imimg.com/data5/SELLER/Default/2020/12/JE/EG/RN/89501297/computer-keyboard-500x500.jpg"> </div>
<figcaption class="info-wrap">
<h4 class="title">Keyboard</h4>

</figcaption>

<div class="bottom-wrap">
<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1300" data-id="2">Order Now</a> 
<div class="price-wrap h5">
<span class="price-new">₹1300</span> 
</div> 
</div> 
</figure>
</div> 


<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://m.media-amazon.com/images/I/812x7rAMSLL._SL1500_.jpg"></div>

<figcaption class="info-wrap"> 
<h4 class="title">Monitor</h4>
<div class="rating-wrap">
</div> 
</figcaption>

<div class="bottom-wrap">

<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="15000" data-id="3">Order Now</a> 

<div class="price-wrap h5">

<span class="price-new">₹15000</span> 
</div> 
</div> 
</figure>
</div> 


<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://www.assets.signify.com/is/image/PhilipsLighting/bb4009f602f54f76844babf900e59357?$jpglarge$&wid=1250"></div>

<figcaption class="info-wrap"> 
<h4 class="title">LED Light</h4>
<div class="rating-wrap">
</div> 
</figcaption>

<div class="bottom-wrap">

<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="800" data-id="4">Order Now</a> 

<div class="price-wrap h5">

<span class="price-new">₹800</span> 
</div> 
</div> 
</figure>
</div> 

<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://m.media-amazon.com/images/I/31iVcLXkPcL.jpg"></div>

<figcaption class="info-wrap"> 
<h4 class="title">Ceiling Fan</h4>
<div class="rating-wrap">
</div> 
</figcaption>

<div class="bottom-wrap">

<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="2000" data-id="4">Order Now</a> 

<div class="price-wrap h5">

<span class="price-new">₹2000</span> 
</div> 
</div> 
</figure>
</div> 
<div class="col-md-4">
<figure class="card card-product">
<div class="img-wrap"><img src="https://assets.bldnxt.in/catalog/product/cache/1/image/a77c1558d860704591e3027d1ebed402/r/a/rafz601950_hybec601950_5c5933bd737ff.jpg"></div>

<figcaption class="info-wrap"> 
<h4 class="title">Tube light</h4>
<div class="rating-wrap">
</div> 
</figcaption>

<div class="bottom-wrap">

<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="200" data-id="4">Order Now</a> 

<div class="price-wrap h5">

<span class="price-new">₹200</span> 
</div> 
</div> 
</figure>
</div> 



</div> 
</div> 


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('body').on('click', '.buy_now', function(e){
var totalAmount = $(this).attr("data-amount");
var product_id =  $(this).attr("data-id");
var options = {
"key": "rzp_test_Wu5wXaXZRSEwRG",
"amount": (totalAmount*100), // 2000 paise = INR 20
"name": "Payment",

"image": "https://icon-library.com/images/icon-purchase/icon-purchase-15.jpg",

"handler": function (response){
$.ajax({
url: 'payment.php',
type: 'post',
dataType: 'json',
data: {
razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount , product_id : product_id,
}, 

success: function (msg) {
window.location.href = 'success.php';
}

});

},
"theme": {
"color": "#bff2f5"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
});
</script>
<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved at MYSTORE.COM
		</p>


	</footer>



</body>
</html>